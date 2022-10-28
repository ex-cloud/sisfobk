/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'tosca-100': '#8DAAA6',
        'tosca-200': '#5E8587',
        'tosca-300': '#4A797C',
        'tosca-400': '#3B6163',
        'orange-100': '#E9AE8C',
        'orange-200': '#E78953',
        'orange-300': '#DA9D7B',
        'peach-100': '#FF9376',
        'cream-100': '#F6D5B6',
        'gray-350': '#808080',
        'black-50': '#4c4c4c',
        'black-100': '#100F0F',
        'yellow-200': '#FCD900',
        'yellow-400': '#CAAE00',
        'green-200': '#B8F1B0',
        'green-400': '#93C18D',
        'red-200': '#EB5353',
        'red-400': '#BC4242',
      },
      borderRadius: {
        '4xl': '32px'
      },
      margin: {
        '13': '52px',
        '23': '92px',
        '30': '120px',
        '34': '136px',
        '38': '152px',
        '38.5': '153px',
        '39': '156px',
        '41': '164px',
        '42': '168px',
        '47': '188px',
        '84': '336px',
        '93': '372px',
        '100': '400px',
        '111': '444px',
        '116': '464px',
        '121': '484px',
        '130': '520px',
        '135': '540px',
        '140': '560px',
        '155': '620px',
        '160': '639px',
        
      },
      zIndex: {
        '1': 1
      },
      fontSize: {
        '6-1/2xl': '64px'
      },
      width: {
        '15': '60px',
        '18': '72px',
        '33': '132px',
        '38': '152px',
        '50': '200px',
        '67': '268px',
        '68': '272px',
        '100': '400px',
        '116': '464px',
        '121': '484px',
        '157': '628px',
        '150': '600px',
        '180': '704px',
        '200': '800px',
        
      },
      height: {
        '15': '60px',
        '18': '72px',
        '35': '140px',
        '38': '152px',
        '39': '156px',
        '121': '484px',
        '150': '600px',
        '200': '800px',
        '235': '940px',
        
      }
    },
  },
  variants: {
    extend: {
        backgroundColor: ['active'],
        textColor: ['active']
    }
 },
  plugins: [
    require('flowbite/plugin'),
  ],
}
