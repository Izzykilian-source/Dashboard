/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#1E293B",      // Sidebar background
        secondary: "#334155",    // Hover sidebar
        accent: "#4F46E5",       // Menu aktif & tombol logout
        // Tambahkan warna lain sesuai kebutuhan
      },
    },
  },
  plugins: [],
};
