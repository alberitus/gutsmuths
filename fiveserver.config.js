module.exports = {
    port: 8085,
    root: 'dev',
    // file: 'theme',
    // host: '0.0.0.0',
    open: true,
    https: true,
    browser: ['chrome'],
    // browser: ['C:\\Program Files\\Firefox Developer Edition\\firefox.exe --private-window'],
    watch: 'dev',
    // ignore: [/\.s[ac]ss$/i, /\.tsx?$/i],
    // mount: { '/img': 'C:\\Users\\yanni\\Pictures' },
    // remoteLogs: 'yellow',
    // logLevel: 2,
    // php: '/usr/bin/php',
    php: 'C:\\xampp\\php\\php.exe',
    proxy: { '/': 'http://localhost:8080' },
    withExtension: 'redirect'
    // logLevel: 2
  }