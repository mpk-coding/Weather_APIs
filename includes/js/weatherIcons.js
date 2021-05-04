var weatherSVG = {
  "umbrella" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><title>umbrella</title><path d=\"M21.84 11h-19.674c0.387-1.824 1.259-3.474 2.485-4.796 1.617-1.744 3.848-2.915 6.394-3.158 2.763-0.264 5.369 0.616 7.354 2.255 1.717 1.418 2.965 3.401 3.441 5.7zM23.995 11.905c-0.316-3.312-1.946-6.184-4.323-8.147s-5.505-3.020-8.817-2.704c-3.052 0.291-5.731 1.699-7.67 3.789-1.759 1.897-2.909 4.357-3.18 7.057-0.055 0.55 0.346 1.040 0.895 1.095 0.035 0.004 0.070 0.005 0.1 0.005h22c0.531 0 0.966-0.414 0.998-0.937-0.001-0.137-0.002-0.148-0.003-0.158zM17 19c0 0.553-0.223 1.051-0.586 1.414s-0.861 0.586-1.414 0.586-1.051-0.223-1.414-0.586-0.586-0.861-0.586-1.414v-7c0-0.552-0.448-1-1-1s-1 0.448-1 1v7c0 1.104 0.449 2.106 1.172 2.828s1.724 1.172 2.828 1.172 2.106-0.449 2.828-1.172 1.172-1.724 1.172-2.828c0-0.552-0.448-1-1-1s-1 0.448-1 1z\"></path></svg>",
  //
  "cloud" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>cloud</title><path d=\"M25 10c-0.332 0-0.66 0.023-0.987 0.070-1.867-2.544-4.814-4.070-8.013-4.070s-6.145 1.526-8.013 4.070c-0.327-0.047-0.655-0.070-0.987-0.070-3.859 0-7 3.141-7 7s3.141 7 7 7c0.856 0 1.693-0.156 2.482-0.458 1.81 1.578 4.112 2.458 6.518 2.458 2.409 0 4.708-0.88 6.518-2.458 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7s-3.141-7-7-7zM25 22c-1.070 0-2.057-0.344-2.871-0.917-1.467 1.768-3.652 2.917-6.129 2.917s-4.662-1.148-6.129-2.917c-0.813 0.573-1.801 0.917-2.871 0.917-2.762 0-5-2.238-5-5s2.238-5 5-5c0.676 0 1.316 0.138 1.902 0.38 1.327-2.588 3.991-4.38 7.098-4.38s5.771 1.792 7.096 4.38c0.587-0.242 1.229-0.38 1.904-0.38 2.762 0 5 2.238 5 5s-2.238 5-5 5z\"></path></svg>",
  //
  "cloudy" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>cloudy</title><path d=\"M13 4c0.552 0 1-0.448 1-1v-2c0-0.552-0.448-1-1-1s-1 0.448-1 1v2c0 0.552 0.448 1 1 1zM20.777 6.635l1.414-1.414c0.391-0.391 0.391-1.023 0-1.414s-1.023-0.391-1.414 0l-1.414 1.414c-0.391 0.391-0.391 1.023 0 1.414s1.023 0.391 1.414 0zM1 14h2c0.552 0 1-0.448 1-1s-0.448-1-1-1h-2c-0.552 0-1 0.448-1 1s0.448 1 1 1zM22 13c0 0.552 0.448 1 1 1h2c0.552 0 1-0.448 1-1s-0.448-1-1-1h-2c-0.552 0-1 0.448-1 1zM5.221 6.635c0.391 0.391 1.024 0.391 1.414 0s0.391-1.023 0-1.414l-1.414-1.414c-0.391-0.391-1.023-0.391-1.414 0s-0.391 1.023 0 1.414l1.414 1.414zM25 16c-0.332 0-0.66 0.023-0.987 0.070-1.048-1.43-2.445-2.521-4.029-3.219-0.081-3.789-3.176-6.852-6.984-6.852-3.859 0-7 3.141-7 7 0 1.090 0.271 2.109 0.719 3.027-3.727 0.152-6.719 3.211-6.719 6.973 0 3.859 3.141 7 7 7 0.856 0 1.693-0.156 2.482-0.458 1.81 1.578 4.112 2.458 6.518 2.458 2.409 0 4.708-0.88 6.518-2.458 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7s-3.141-7-7-7zM13 8c2.488 0 4.535 1.823 4.919 4.203-0.626-0.125-1.266-0.203-1.919-0.203-2.871 0-5.531 1.238-7.398 3.328-0.371-0.698-0.602-1.482-0.602-2.328 0-2.762 2.238-5 5-5zM25 28c-1.070 0-2.057-0.344-2.871-0.917-1.467 1.768-3.652 2.917-6.129 2.917s-4.662-1.148-6.129-2.917c-0.813 0.573-1.801 0.917-2.871 0.917-2.762 0-5-2.238-5-5s2.238-5 5-5c0.484 0 0.941 0.091 1.383 0.221 0.176 0.049 0.354 0.089 0.52 0.158 0.273-0.535 0.617-1.025 0.999-1.484 1.461-1.758 3.634-2.895 6.099-2.895 0.633 0 1.24 0.091 1.828 0.232 0.66 0.156 1.284 0.393 1.865 0.706 1.456 0.773 2.651 1.971 3.404 3.441 0.587-0.242 1.229-0.379 1.904-0.379 2.762 0 5 2.238 5 5s-2.238 5-5 5z\"></path></svg>",
  //
  "storm" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>lightning</title><path d=\"M25 4c-0.332 0-0.66 0.023-0.987 0.070-1.867-2.544-4.814-4.070-8.013-4.070s-6.145 1.526-8.013 4.070c-0.327-0.047-0.655-0.070-0.987-0.070-3.859 0-7 3.141-7 7s3.141 7 7 7c0.856 0 1.693-0.156 2.482-0.458 0.768 0.669 1.641 1.185 2.557 1.588l1.557-1.555c-1.466-0.477-2.76-1.329-3.725-2.492-0.812 0.573-1.801 0.917-2.871 0.917-2.762 0-5-2.238-5-5s2.238-5 5-5c0.676 0 1.316 0.138 1.902 0.38 1.327-2.588 3.991-4.38 7.098-4.38s5.771 1.792 7.096 4.38c0.587-0.242 1.229-0.38 1.904-0.38 2.762 0 5 2.238 5 5s-2.238 5-5 5c-1.070 0-2.057-0.344-2.871-0.917-0.648 0.783-1.457 1.417-2.352 1.911l-0.84 2.521c1.305-0.41 2.531-1.059 3.581-1.974 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7s-3.141-7-7-7zM12 22l2 2-2 6 6-6-2-2 2-6-6 6z\"></path></svg>",
  //
  "rain" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>rainy</title><path d=\"M25 4c-0.332 0-0.66 0.023-0.987 0.070-1.867-2.544-4.814-4.070-8.013-4.070s-6.145 1.526-8.013 4.070c-0.327-0.047-0.655-0.070-0.987-0.070-3.859 0-7 3.141-7 7s3.141 7 7 7c0.856 0 1.693-0.156 2.482-0.458 1.81 1.578 4.112 2.458 6.518 2.458 2.409 0 4.708-0.88 6.518-2.458 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7s-3.141-7-7-7zM25 16c-1.070 0-2.057-0.344-2.871-0.917-1.467 1.768-3.652 2.917-6.129 2.917s-4.662-1.148-6.129-2.917c-0.813 0.573-1.801 0.917-2.871 0.917-2.762 0-5-2.238-5-5s2.238-5 5-5c0.676 0 1.316 0.138 1.902 0.38 1.327-2.588 3.991-4.38 7.098-4.38s5.771 1.792 7.096 4.38c0.587-0.242 1.229-0.38 1.904-0.38 2.762 0 5 2.238 5 5s-2.238 5-5 5zM14.063 30c0 1.105 0.895 2 2 2s2-0.895 2-2-2-4-2-4-2 2.895-2 4zM22 28c0 1.105 0.895 2 2 2s2-0.895 2-2-2-4-2-4-2 2.895-2 4zM6 24c0 1.105 0.894 2 2 2s2-0.895 2-2-2-4-2-4-2 2.895-2 4z\"></path></svg>",
  //
  "snow" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>snowy</title><path d=\"M20.378 27.73l-1.125-0.648c0.034-0.195 0.060-0.394 0.060-0.602s-0.026-0.406-0.063-0.602l1.128-0.65c0.526-0.307 0.706-0.983 0.404-1.506-0.305-0.53-0.979-0.711-1.508-0.406l-1.137 0.656c-0.305-0.259-0.648-0.462-1.031-0.6v-1.306c0-0.611-0.496-1.105-1.105-1.105s-1.104 0.495-1.104 1.105v1.305c-0.383 0.137-0.728 0.342-1.033 0.602l-1.134-0.656c-0.53-0.305-1.206-0.125-1.51 0.405-0.305 0.526-0.121 1.203 0.406 1.508l1.122 0.648c-0.037 0.197-0.060 0.396-0.060 0.603s0.023 0.406 0.060 0.602l-1.122 0.648c-0.529 0.305-0.711 0.984-0.406 1.512s0.98 0.707 1.508 0.402l1.135-0.652c0.305 0.258 0.65 0.461 1.034 0.598v1.309c0 0.609 0.495 1.102 1.104 1.102s1.105-0.492 1.105-1.102v-1.309c0.383-0.137 0.73-0.34 1.033-0.602l1.135 0.656c0.529 0.305 1.203 0.125 1.508-0.402s0.125-1.203-0.404-1.512zM16 27.586c-0.609 0-1.105-0.496-1.105-1.105s0.496-1.103 1.105-1.103 1.104 0.494 1.104 1.103-0.495 1.105-1.104 1.105zM29.635 24.766l-0.755-0.201c-0.018-0.24-0.076-0.467-0.181-0.686l0.548-0.548c0.258-0.258 0.256-0.674 0-0.928-0.255-0.256-0.669-0.258-0.927 0l-0.549 0.547c-0.216-0.102-0.447-0.16-0.685-0.18l-0.201-0.754c-0.094-0.349-0.453-0.559-0.805-0.465-0.35 0.095-0.555 0.454-0.464 0.805l0.201 0.744c-0.099 0.068-0.193 0.143-0.281 0.229-0.086 0.089-0.159 0.182-0.227 0.279l-0.744-0.201c-0.35-0.094-0.712 0.117-0.806 0.465-0.094 0.352 0.117 0.71 0.464 0.805l0.75 0.202c0.021 0.236 0.081 0.466 0.186 0.685l-0.551 0.551c-0.255 0.256-0.254 0.671 0.003 0.926 0.255 0.255 0.669 0.258 0.924 0.003l0.552-0.552c0.216 0.107 0.448 0.167 0.688 0.185l0.198 0.751c0.096 0.35 0.453 0.559 0.805 0.465 0.349-0.094 0.56-0.453 0.466-0.807l-0.201-0.744c0.094-0.066 0.19-0.141 0.279-0.227 0.086-0.087 0.159-0.184 0.227-0.28l0.745 0.201c0.35 0.094 0.711-0.116 0.803-0.464 0.094-0.349-0.113-0.708-0.462-0.805zM27.395 25.184c-0.258 0.258-0.673 0.256-0.93 0-0.254-0.254-0.256-0.671 0-0.928 0.256-0.255 0.673-0.255 0.93 0 0.254 0.256 0.254 0.674 0 0.928zM7.434 21.406l-0.742 0.199c-0.069-0.094-0.141-0.189-0.228-0.277-0.088-0.086-0.182-0.16-0.28-0.227l0.199-0.746c0.094-0.35-0.115-0.711-0.461-0.803-0.352-0.094-0.711 0.115-0.805 0.464l-0.203 0.754c-0.238 0.020-0.466 0.078-0.684 0.181l-0.551-0.548c-0.258-0.258-0.672-0.256-0.927 0-0.256 0.256-0.256 0.672 0 0.928l0.548 0.548c-0.103 0.219-0.163 0.449-0.181 0.686l-0.753 0.201c-0.352 0.096-0.56 0.453-0.466 0.805 0.095 0.349 0.454 0.555 0.806 0.464l0.742-0.202c0.066 0.1 0.141 0.194 0.231 0.281 0.086 0.086 0.18 0.163 0.277 0.227l-0.199 0.744c-0.094 0.352 0.115 0.714 0.463 0.807 0.352 0.094 0.708-0.115 0.802-0.465l0.203-0.75c0.238-0.020 0.469-0.079 0.688-0.184l0.549 0.549c0.255 0.258 0.669 0.253 0.927-0.003 0.254-0.254 0.258-0.669 0-0.926l-0.551-0.551c0.106-0.216 0.168-0.449 0.184-0.688l0.754-0.199c0.348-0.095 0.556-0.453 0.462-0.805-0.094-0.348-0.453-0.556-0.806-0.465zM5.535 23.185c-0.256 0.256-0.672 0.256-0.93 0-0.254-0.255-0.254-0.673 0-0.927 0.258-0.255 0.673-0.255 0.93 0s0.254 0.672 0 0.927zM32 11c0-3.859-3.141-7-7-7-0.332 0-0.66 0.023-0.987 0.070-1.867-2.544-4.814-4.070-8.013-4.070s-6.145 1.526-8.013 4.070c-0.327-0.047-0.655-0.070-0.987-0.070-3.859 0-7 3.141-7 7s3.141 7 7 7c0.856 0 1.693-0.156 2.482-0.458 1.81 1.578 4.112 2.458 6.518 2.458 2.409 0 4.708-0.88 6.518-2.458 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7zM22.129 15.083c-1.467 1.768-3.652 2.917-6.129 2.917s-4.662-1.148-6.129-2.917c-0.813 0.573-1.801 0.917-2.871 0.917-2.762 0-5-2.238-5-5s2.238-5 5-5c0.676 0 1.316 0.138 1.902 0.38 1.327-2.588 3.991-4.38 7.098-4.38s5.771 1.792 7.096 4.38c0.587-0.242 1.229-0.38 1.904-0.38 2.762 0 5 2.238 5 5s-2.238 5-5 5c-1.070 0-2.057-0.344-2.871-0.917z\"></path></svg>",
  //
  "sunny" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>sun</title><path d=\"M16 9c-3.859 0-7 3.141-7 7s3.141 7 7 7 7-3.141 7-7c0-3.859-3.141-7-7-7zM16 21c-2.762 0-5-2.238-5-5s2.238-5 5-5 5 2.238 5 5-2.238 5-5 5zM16 7c0.552 0 1-0.448 1-1v-2c0-0.552-0.448-1-1-1s-1 0.448-1 1v2c0 0.552 0.448 1 1 1zM16 25c-0.552 0-1 0.448-1 1v2c0 0.552 0.448 1 1 1s1-0.448 1-1v-2c0-0.552-0.448-1-1-1zM23.777 9.635l1.414-1.414c0.391-0.391 0.391-1.023 0-1.414s-1.023-0.391-1.414 0l-1.414 1.414c-0.391 0.391-0.391 1.023 0 1.414s1.023 0.391 1.414 0zM8.223 22.365l-1.414 1.414c-0.391 0.391-0.391 1.023 0 1.414s1.023 0.391 1.414 0l1.414-1.414c0.391-0.392 0.391-1.023 0-1.414s-1.023-0.392-1.414 0zM7 16c0-0.552-0.448-1-1-1h-2c-0.552 0-1 0.448-1 1s0.448 1 1 1h2c0.552 0 1-0.448 1-1zM28 15h-2c-0.552 0-1 0.448-1 1s0.448 1 1 1h2c0.552 0 1-0.448 1-1s-0.448-1-1-1zM8.221 9.635c0.391 0.391 1.024 0.391 1.414 0s0.391-1.023 0-1.414l-1.414-1.414c-0.391-0.391-1.023-0.391-1.414 0s-0.391 1.023 0 1.414l1.414 1.414zM23.779 22.363c-0.392-0.391-1.023-0.391-1.414 0s-0.392 1.023 0 1.414l1.414 1.414c0.391 0.391 1.023 0.391 1.414 0s0.391-1.023 0-1.414l-1.414-1.414z\"></path></svg>",
  //
  "wind" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>wind</title><path d=\"M26.938 12c-1.656 0-3 1.344-3 3 0 0.353 0.073 0.685 0.184 1h-19.184c-0.552 0-1 0.448-1 1s0.448 1 1 1h22c1.656 0 3-1.344 3-3s-1.344-3-3-3zM4.938 14h12c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3c0 0.353 0.073 0.685 0.184 1h-9.184c-0.552 0-1 0.448-1 1s0.448 1 1 1zM20.938 20c-0.059 0-0.115 0.013-0.174 0.018-0.039-0.003-0.072-0.018-0.111-0.018h-15.428c-0.711 0-1.287 0.448-1.287 1s0.576 1 1.287 1h12.897c-0.111 0.315-0.184 0.648-0.184 1 0 1.656 1.344 3 3 3s3-1.344 3-3-1.344-3-3-3z\"></path></svg>",
  //
  "hailstorm" : "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><title>weather</title><path d=\"M25 4c-0.332 0-0.66 0.023-0.987 0.070-1.867-2.544-4.814-4.070-8.013-4.070s-6.145 1.526-8.013 4.070c-0.327-0.047-0.655-0.070-0.987-0.070-3.859 0-7 3.141-7 7s3.141 7 7 7c0.856 0 1.693-0.156 2.482-0.458 1.81 1.578 4.112 2.458 6.518 2.458 2.409 0 4.708-0.88 6.518-2.458 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7s-3.141-7-7-7zM25 16c-0.607 0-1.201-0.109-1.766-0.325l-1.125-0.432-0.906 0.792c-1.453 1.268-3.301 1.966-5.203 1.966s-3.75-0.698-5.203-1.966l-0.906-0.792-1.125 0.432c-0.563 0.216-1.159 0.326-1.766 0.326-2.758 0-5-2.244-5-5s2.242-5 5-5c0.237 0 0.469 0.017 0.703 0.050l1.185 0.172 0.71-0.966c1.52-2.069 3.853-3.255 6.402-3.255 2.551 0 4.883 1.185 6.401 3.254l0.711 0.967 1.187-0.172c0.232-0.033 0.464-0.050 0.701-0.050 2.758 0 5 2.244 5 5s-2.242 5-5 5zM6 20c-1.106 0-2 0.895-2 2s0.894 2 2 2 2-0.895 2-2-0.894-2-2-2zM16 22c-1.105 0-2 0.895-2 2s0.895 2 2 2 2-0.895 2-2-0.895-2-2-2zM26 20c-1.105 0-2 0.895-2 2s0.895 2 2 2 2-0.895 2-2-0.895-2-2-2zM22 28c-1.105 0-2 0.895-2 2s0.895 2 2 2 2-0.895 2-2-0.895-2-2-2zM10 28c-1.105 0-2 0.895-2 2s0.895 2 2 2 2-0.895 2-2-0.895-2-2-2z\"></path></svg>",
};

$(document).ready(function () {
});

