/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        backgroundImage:{
            'code': "url('/public/img/coding.jpg')",
            'code': "url('/public/img/coding.jpg')",
            'cpp': "url('/public/img/cpp.png')",
            'js': "url('/public/img/js.png')",
            'html': "url('/public/img/HTML.png')",
            'node': "url('/public/img/node.png')",
            'python': "url('/public/img/Python.png')",
            'laravel': "url('/public/img/laravel.png')",
            'rn': "url('/public/img/reactNative.png')",
            'tw': "url('/public/img/Tailwind.png')",
            'db': "url('/public/img/db.png')",
            'pokeball': "url('/public/img/poke.jpeg')",
            'sf': "url('/public/img/sanFrancisco.jpg')",
            'sfd': "url('/public/img/sf.jpg')",
          },
          backgroundColor: theme =>({
            ...theme('colors'),
            'primary' : '#0065fb',
            'secondary' : '#cc00a6',
            'terciary' : '#61AEC9'
          }),
          textColor:{
            'primary' : '#0065fb',
            'secundary' : '#cc00a6',
            'terciary' : '#61AEC9'
          },
          fontFamily:{
            Montserrat: ["Monserrat", "sans-serif"]
          }
      },
    },
    plugins: [],
  }
