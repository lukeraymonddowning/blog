module.exports = {
    purge: [
        './resources/views/**/*.html',
        './resources/css/site.css'
    ],
    theme: {
        extend: {
            colors: {
                'teal': '#9cdbff',
            },
            minWidth: {
                'max': '100%',
            },
        }
    }
}
