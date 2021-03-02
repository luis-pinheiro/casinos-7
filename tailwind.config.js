module.exports = {
  content: ['./src/**/*.html'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      boxShadow: {
        drop: '0 2px 8px 0 rgba(0,0,0,0.14)',
        white: '0px 1px 7px 0px rgba(255,255,255,255.75)',
        neumorph: ' 20px 20px 60px #bebebe, -20px -20px 60px #ffffff',
      },

      colors: {
        royalblue: {
          50: '#f6fbfd',
          100: '#e7f8fd',
          200: '#c2e8fb',
          300: '#98d2fb',
          400: '#5fa7fa',
          500: '#2f7af9',
          600: '#0963ef',
          700: '#1b43dd',
          800: '#1733aa',
          900: '#132a82',
        },
        indigo: {
          50: '#f5f9fc',
          100: '#e8f2fc',
          200: '#cddcfb',
          300: '#afc1fa',
          400: '#8994fa',
          500: '#6066fa',
          600: '#4645f6',
          700: '#3936e3',
          800: '#2d2cb8',
          900: '#242591',
        },
        flamingo: {
          50: '#f6f5fa',
          100: '#f0e7fa',
          200: '#e3c9f8',
          300: '#d6a8f7',
          400: '#ce7af7',
          500: '#c54ff7',
          600: '#ab32f1',
          700: '#8428dd',
          800: '#6522b3',
          900: '#511e8e',
        },
        cerise: {
          50: '#fcf9f9',
          100: '#fdeef5',
          200: '#fbceea',
          300: '#faa4da',
          400: '#fb6abd',
          500: '#fc409c',
          600: '#f62575',
          700: '#db1d5b',
          800: '#ae1844',
          900: '#891535',
        },
        scarlet: {
          50: '#fcf8f6',
          100: '#fcefee',
          200: '#fad5db',
          300: '#f9b1ba',
          400: '#fa7c86',
          500: '#fa5158',
          600: '#f3323a',
          700: '#d52634',
          800: '#aa1f2e',
          900: '#861a27',
        },
        mango: {
          50: '#faf6ee',
          100: '#fbeed7',
          200: '#f8deab',
          300: '#f6c56c',
          400: '#f39e30',
          500: '#f27615',
          600: '#e6520e',
          700: '#c53d12',
          800: '#9f3118',
          900: '#812818',
        },
        orange: {
          50: '#faf7ed',
          100: '#faf3d0',
          200: '#f6e895',
          300: '#f1d54f',
          400: '#e7b51b',
          500: '#df930a',
          600: '#c96e06',
          700: '#a2520a',
          800: '#7f4010',
          900: '#643311',
        },
        sunglow: {
          50: '#fafaf2',
          100: '#faf7d8',
          200: '#f4ef9a',
          300: '#ebdf53',
          400: '#d8c31b',
          500: '#bfa309',
          600: '#9b7f05',
          700: '#766108',
          800: '#58490d',
          900: '#44390e',
        },
        limegreen: {
          50: '#f3f9f7',
          100: '#e6f8ef',
          200: '#c6f2d6',
          300: '#95e7b6',
          400: '#44d382',
          500: '#1aba51',
          600: '#149d38',
          700: '#197e33',
          800: '#1a602f',
          900: '#174d2a',
        },
        cerulean: {
          50: '#f0f9fb',
          100: '#daf7f8',
          200: '#adeef1',
          300: '#75e1eb',
          400: '#30c8e2',
          500: '#11a8d5',
          600: '#0d87be',
          700: '#126c99',
          800: '#135371',
          900: '#124358',
        },
      },
    },

    textIndent: {
      // defaults to {}
      1: '0.25rem',
      2: '0.5rem',
    },
    textShadow: {
      // defaults to {}
      default: '0 2px 5px rgba(0, 0, 0, 0.5)',
      lg: '0 2px 10px rgba(0, 0, 0, 0.5)',
      1: '4px 4px 4px #aaa',
      none: 'none',
    },
    textDecorationStyle: {
      // defaults to these values
      solid: 'solid',
      double: 'double',
      dotted: 'dotted',
      dashed: 'dashed',
      wavy: 'wavy',
    },
    textDecorationColor: {
      // defaults to theme => theme('colors')
      red: '#f00',
      green: '#0f0',
      blue: '#00f',
    },
    fontVariantCaps: {
      // defaults to these values
      normal: 'normal',
      small: 'small-caps',
      'all-small': 'all-small-caps',
      petite: 'petite-caps',
      unicase: 'unicase',
      titling: 'titling-caps',
    },
    fontVariantNumeric: {
      // defaults to these values
      normal: 'normal',
      ordinal: 'ordinal',
      'slashed-zero': 'slashed-zero',
      lining: 'lining-nums',
      oldstyle: 'oldstyle-nums',
      proportional: 'proportional-nums',
      tabular: 'tabular-nums',
      'diagonal-fractions': 'diagonal-fractions',
      'stacked-fractions': 'stacked-fractions',
    },
    fontVariantLigatures: {
      // defaults to these values
      normal: 'normal',
      none: 'none',
      common: 'common-ligatures',
      'no-common': 'no-common-ligatures',
      discretionary: 'discretionary-ligatures',
      'no-discretionary': 'no-discretionary-ligatures',
      historical: 'historical-ligatures',
      'no-historical': 'no-historical-ligatures',
      contextual: 'contextual',
      'no-contextual': 'no-contextual',
    },
    textRendering: {
      // defaults to these values
      'rendering-auto': 'auto',
      'optimize-legibility': 'optimizeLegibility',
      'optimize-speed': 'optimizeSpeed',
      'geometric-precision': 'geometricPrecision',
    },
    textStyles: (theme) => ({
      // defaults to {}
      heading: {
        output: false, // this means there won't be a "heading" component in the CSS, but it can be extended
        fontWeight: theme('fontWeight.bold'),
        lineHeight: theme('lineHeight.tight'),
      },
      h1: {
        extends: 'heading', // this means all the styles in "heading" will be copied here; "extends" can also be an array to extend multiple text styles
        fontSize: theme('fontSize.5xl'),
        '@screen sm': {
          fontSize: theme('fontSize.6xl'),
        },
      },
      h2: {
        extends: 'heading',
        fontSize: theme('fontSize.4xl'),
        '@screen sm': {
          fontSize: theme('fontSize.5xl'),
        },
      },
      h3: {
        extends: 'heading',
        fontSize: theme('fontSize.4xl'),
      },
      h4: {
        extends: 'heading',
        fontSize: theme('fontSize.3xl'),
      },
      h5: {
        extends: 'heading',
        fontSize: theme('fontSize.2xl'),
      },
      h6: {
        extends: 'heading',
        fontSize: theme('fontSize.xl'),
      },
      link: {
        fontWeight: theme('fontWeight.bold'),
        color: theme('colors.blue.400'),
        '&:hover': {
          color: theme('colors.blue.600'),
          textDecoration: 'underline',
        },
      },
      richText: {
        fontWeight: theme('fontWeight.normal'),
        fontSize: theme('fontSize.base'),
        lineHeight: theme('lineHeight.relaxed'),
        '> * + *': {
          marginTop: '1em',
        },
        h1: {
          extends: 'h1',
        },
        h2: {
          extends: 'h2',
        },
        h3: {
          extends: 'h3',
        },
        h4: {
          extends: 'h4',
        },
        h5: {
          extends: 'h5',
        },
        h6: {
          extends: 'h6',
        },
        ul: {
          listStyleType: 'disc',
        },
        ol: {
          listStyleType: 'decimal',
        },
        a: {
          extends: 'link',
        },
        'b, strong': {
          fontWeight: theme('fontWeight.bold'),
        },
        'i, em': {
          fontStyle: 'italic',
        },
      },
    }),
  },
  variants: {
    extend: {
      backgroundColor: ['checked'],
      borderColor: ['checked'],
      inset: ['checked'],
      zIndex: ['hover', 'active'],
      backgroundImage: ['dark'],
    },
    // all the following default to ['responsive']
    textIndent: ['responsive'],
    textShadow: ['responsive', 'dark', 'hover'],
    textDecorationStyle: ['responsive'],
    textDecorationColor: ['responsive'],
    ellipsis: ['responsive'],
    hyphens: ['responsive'],
    kerning: ['responsive'],
    textUnset: ['responsive'],
    fontVariantCaps: ['responsive'],
    fontVariantNumeric: ['responsive'],
    fontVariantLigatures: ['responsive'],
    textRendering: ['responsive'],
  },
  plugins: [
    require('tailwindcss-elevation')(['responsive', 'group-hover', 'focus-within', 'hover', 'focus']),
    require('tailwindcss-debug-screens'),
    require('@tailwindcss/forms'),
    require('tailwindcss-typography')({
      // all these options default to the values specified here
      ellipsis: true, // whether to generate ellipsis utilities
      hyphens: true, // whether to generate hyphenation utilities
      kerning: true, // whether to generate kerning utilities
      textUnset: true, // whether to generate utilities to unset text properties
      componentPrefix: 'c-', // the prefix to use for text style classes
    }),
  ],
  future: {
    purgeLayersByDefault: true,
  },
};
