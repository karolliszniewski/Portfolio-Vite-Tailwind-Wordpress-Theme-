module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    './*.php',
    './inc/**/*.php',
    './templates/**/*.php',
    './template-parts/*.php',
    './safelist.txt',
    './assets/**/*.css'
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  safelist: [
    'text-center'
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  theme: {
    extend: {
      colors: {
        'stone-gray': '#3A3A3E',
        'background-base' : '#242428',
        'yellow-theme': '#FFDD95'
      },
      height: {
        'full-without-header-mobile': 'calc(100vh - 3rem)',
        'full-without-header-desktop': 'calc(100vh - 5rem)',
      },
    }
  },
  plugins: []
}