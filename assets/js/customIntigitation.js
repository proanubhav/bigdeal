window.sendCustomIntegration = async function sendCustomIntegration(data) {
    
    const rawPathSheetMap = {
      '/apply-franchise': 'Google',
      '/apply-now': 'Facebook'
    };

    const normalizePath = (url) => {
        if (!url) return '';
        try {
            const parsed = new URL(url.trim());
            let pathname = parsed.pathname || '';
            if (pathname !== '/' && pathname.endsWith('/')) {
                pathname = pathname.slice(0, -1);
            }
            return (pathname || '/').toLowerCase();
        } catch (e) {
            const pathOnly = url.trim().toLowerCase().replace(/^https?:\/\/[^/]+/i, '');
            if (!pathOnly) return '/';
            return pathOnly.endsWith('/') && pathOnly !== '/' ? pathOnly.slice(0, -1) : pathOnly;
        }
    };

    const pagePath = normalizePath(data.pageUrl || data.sourceUrl || '');
    const sourceOfLead = rawPathSheetMap[pagePath] || 'Organic';

    const payload = {
        name: (data.name || '').trim(),
        mobile: (data.contact || '').trim(),
        email: (data.email || '').trim(),
        'Pin Code': (data.pincode || '').trim(),
        'Area in Sqft.': data.area,
        'Source Of Lead': sourceOfLead,
        'Property Type': data.propType,
        'Opening Time': data.plan,        
    };

    try {
        const response = await fetch('https://6be6e3af-9146-491e-b59c-fb471d8fdf8f.neodove.com/integration/custom/b089760a-cf6a-42e4-adba-d6a0586f8661/leads', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(payload),
        });

        return response.ok;
    } catch (error) {
        console.error('Custom integration error:', error);
        return false;
    }
};
