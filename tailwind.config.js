/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

// tailwind.config.js

module.exports = {
  // ... other configuration ...

  plugins: [
    // ... other plugins ...

    require('@tailwindcss/ui'),
  ],
};
