const lotes = [
    { "id": 1, "mzn": 1, "cls":"st8" , "categ": "AAA PLUS", "mt": 399.77, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'3,318,091.00'} },
    { "id": 2, "mzn": 1, "cls":"st11" , "categ": "A ", "mt": 257.28, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,981,056.00'} },
    { "id": 3, "mzn": 1, "cls":"st11" , "categ": "A", "mt": 252.54, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,944,558.00'} },
    { "id": 4, "mzn": 1, "cls":"st11" , "categ": "A", "mt": 247.79, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,907,983.00'} },
    { "id": 5, "mzn": 1, "cls":"st11" , "categ": "A", "mt": 243.05, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,871,485.00'} },
    { "id": 6, "mzn": 1, "cls":"st11" , "categ": "A", "mt": 238.31, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,834,987.00'} },
    { "id": 7, "mzn": 1, "cls":"st11" , "categ": "A", "mt": 233.57, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,798,489.00'} },
    { "id": 8, "mzn": 1, "cls":"st11" , "categ": "A", "mt": 216.36, "estatus": "Disponible", "precio":{ "lvnPM2":7700, "lvnP18":'1,665,972.00'} },
    { "id": 9, "mzn": 2, "cls":"st8" , "categ": "AAA PLUS", "mt": 272.23, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,259,509.00'} },
    { "id": 10, "mzn": 2, "cls":"st7" , "categ": "AA ", "mt": 277.08, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,188,932.00'} },
    { "id": 11, "mzn": 2, "cls":"st7" , "categ": "AA", "mt": 275.78, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,178,662.00'} },
    { "id": 12, "mzn": 2, "cls":"st7" , "categ": "AA", "mt": 267.99, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,117,121.00'} },
    { "id": 13, "mzn": 2, "cls":"st7" , "categ": "AA", "mt": 260.19, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,055,501.00'} },
    { "id": 14, "mzn": 2, "cls":"st8" , "categ": "AAA PLUS", "mt": 252.4, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,094,920.00'} },
    { "id": 15, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 304.35, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,404,365.00'} },
    { "id": 16, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 249.98, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,974,842.00'} },
    { "id": 17, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.18, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,976,422.00'} },
    { "id": 18, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.37, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,977,923.00'} },
    { "id": 19, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.56, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,979,424.00'} },
    { "id": 20, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.75, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,980,925.00'} },
    { "id": 21, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.47, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,978,713.00'} },
    { "id": 22, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.2, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,976,580.00'} },
    { "id": 23, "mzn": 3, "cls":"st7" , "categ": "AA", "mt": 250.31, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,977,449.00'} },
    { "id": 24, "mzn": 3, "cls":"st10" , "categ": "AAA  ", "mt": 284.82, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,307,042.00'} },
    { "id": 25, "mzn": 4, "cls":"st8" , "categ": "AAA PLUS", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,075,000.00'} },
    { "id": 26, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,975,000.00'} },
    { "id": 27, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 251.67, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,988,193.00'} },
    { "id": 28, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,975,000.00'} },
    { "id": 29, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,975,000.00'} },
    { "id": 30, "mzn": 4, "cls":"st8" , "categ": "AAA PLUS", "mt": 248.33, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,061,139.00'} },
    { "id": 31, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 299.33, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,364,707.00'} },
    { "id": 32, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 298.58, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,358,782.00'} },
    { "id": 33, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 297.39, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,349,381.00'} },
    { "id": 34, "mzn": 4, "cls":"st10" , "categ": "AAA", "mt": 400.66, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'3,245,346.00'} },
    { "id": 35, "mzn": 4, "cls":"st10" , "categ": "AAA", "mt": 290.11, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,349,891.00'} },
    { "id": 36, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 278.6, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,200,940.00'} },
    { "id": 37, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 299.84, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,368,736.00'} },
    { "id": 38, "mzn": 4, "cls":"st7" , "categ": "AA", "mt": 300.67, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,375,293.00'} },
    { "id": 39, "mzn": 5, "cls":"st8" , "categ": "AAA PLUS", "mt": 319.78, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,654,174.00'} },
    { "id": 40, "mzn": 5, "cls":"st10" , "categ": "AAA", "mt": 371.51, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'3,009,231.00'} },
    { "id": 41, "mzn": 5, "cls":"st10" , "categ": "AAA", "mt": 345.53, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,798,793.00'} },
    { "id": 42, "mzn": 5, "cls":"st10" , "categ": "AAA", "mt": 344.93, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,793,933.00'} },
    { "id": 43, "mzn": 5, "cls":"st10" , "categ": "AAA", "mt": 308.01, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,494,881.00'} },
    { "id": 44, "mzn": 5, "cls":"st10" , "categ": "AAA", "mt": 268.66, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,176,146.00'} },
    { "id": 45, "mzn": 5, "cls":"st10" , "categ": "AAA", "mt": 234.71, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,901,151.00'} },
    { "id": 46, "mzn": 5, "cls":"st8" , "categ": "AAA PLUS", "mt": 241.26, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,002,458.00'} },
    { "id": 47, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 247.14, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,952,406.00'} },
    { "id": 48, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 240.84, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,902,636.00'} },
    { "id": 49, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 311.47, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,460,613.00'} },
    { "id": 50, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 360.85, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,850,715.00'} },
    { "id": 51, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 383.87, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'3,032,573.00'} },
    { "id": 52, "mzn": 5, "cls":"st8" , "categ": "AAA PLUS", "mt": 310.85, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,580,055.00'} },
    { "id": 53, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 300, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,370,000.00'} },
    { "id": 54, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 300, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,370,000.00'} },
    { "id": 55, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 300, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,370,000.00'} },
    { "id": 56, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 300, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,370,000.00'} },
    { "id": 57, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 300.01, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,370,079.00'} },
    { "id": 58, "mzn": 5, "cls":"st7" , "categ": "AA", "mt": 292.98, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,314,542.00'} },
    { "id": 59, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 251.92, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,990,168.00'} },
    { "id": 60, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 258.08, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,038,832.00'} },
    { "id": 61, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 258.44, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,041,676.00'} },
    { "id": 62, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 251.61, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,987,719.00'} },
    { "id": 63, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 253.11, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,999,569.00'} },
    { "id": 64, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 250.95, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,982,505.00'} },
    { "id": 65, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 250.36, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,977,844.00'} },
    { "id": 66, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 249.91, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,974,289.00'} },
    { "id": 67, "mzn": 6, "cls":"st8" , "categ": "AAA PLUS", "mt": 285.07, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,366,081.00'} },
    { "id": 68, "mzn": 6, "cls":"st10" , "categ": "AAA", "mt": 269.07, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,179,467.00'} },
    { "id": 69, "mzn": 6, "cls":"st10" , "categ": "AAA", "mt": 220.39, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,785,159.00'} },
    { "id": 70, "mzn": 6, "cls":"st8" , "categ": "AAA PLUS", "mt": 218.04, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'1,809,732.00'} },
    { "id": 71, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 217.63, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,719,277.00'} },
    { "id": 72, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 234.68, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,853,972.00'} },
    { "id": 73, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 249.7, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,972,630.00'} },
    { "id": 74, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 249.21, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,968,759.00'} },
    { "id": 75, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 247.79, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,957,541.00'} },
    { "id": 76, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 246.67, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,948,693.00'} },
    { "id": 77, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 245.87, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,942,373.00'} },
    { "id": 78, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 245.54, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,939,766.00'} },
    { "id": 79, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 248.71, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,964,809.00'} },
    { "id": 80, "mzn": 6, "cls":"st8" , "categ": "AAA PLUS", "mt": 265.76, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,205,808.00'} },
    { "id": 81, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,975,000.00'} },
    { "id": 82, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,975,000.00'} },
    { "id": 83, "mzn": 6, "cls":"st7" , "categ": "AA", "mt": 250, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,975,000.00'} },
    { "id": 84, "mzn": 6, "cls":"st8" , "categ": "AAA PLUS", "mt": 237.13, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'1,968,179.00'} },
    { "id": 85, "mzn": 0, "cls":"st__" , "categ": "NO_INFO", "mt": 0, "estatus": "Disponible", "precio":{ "lvnPM2":0, "lvnP18":''} },
    { "id": 86, "mzn": 0, "cls":"st__" , "categ": "NO_INFO", "mt": 0, "estatus": "Disponible", "precio":{ "lvnPM2":0, "lvnP18":''} },
    { "id": 87, "mzn": 0, "cls":"st__" , "categ": "NO_INFO", "mt": 0, "estatus": "Disponible", "precio":{ "lvnPM2":0, "lvnP18":''} },
    { "id": 88, "mzn": 7, "cls":"st8" , "categ": "AAA PLUS", "mt": 297.17, "estatus": "Disponible", "precio":{ "lvnPM2":8300, "lvnP18":'2,466,511.00'} },
    { "id": 89, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 235.91, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,910,871.00'} },
    { "id": 90, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 234.65, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,900,665.00'} },
    { "id": 91, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 294.3, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,383,830.00'} },
    { "id": 92, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 412.21, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'3,338,901.00'} },
    { "id": 93, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 422.92, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'3,425,652.00'} },
    { "id": 94, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 315.67, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,556,927.00'} },
    { "id": 95, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 304.22, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,464,182.00'} },
    { "id": 96, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 284.24, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,302,344.00'} },
    { "id": 97, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 253.47, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,053,107.00'} },
    { "id": 98, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 237.38, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,922,778.00'} },
    { "id": 99, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 245.02, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,984,662.00'} },
    { "id": 100, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 268.18, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,172,258.00'} },
    { "id": 101, "mzn": 7, "cls":"st10" , "categ": "AAA", "mt": 322.8, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,614,680.00'} },
    { "id": 102, "mzn": 0, "cls":"st__" , "categ": "NO_INFO", "mt": 0, "estatus": "Disponible", "precio":{ "lvnPM2":0, "lvnP18":''} },
    { "id": 103, "mzn": 8, "cls":"st10" , "categ": "AAA", "mt": 260.4, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,109,240.00'} },
    { "id": 104, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 221.48, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,749,692.00'} },
    { "id": 105, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 236.95, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,871,905.00'} },
    { "id": 106, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 245.52, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,939,608.00'} },
    { "id": 107, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 246.94, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,950,826.00'} },
    { "id": 108, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 247.47, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,955,013.00'} },
    { "id": 109, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 248.01, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,959,279.00'} },
    { "id": 110, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 248.54, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,963,466.00'} },
    { "id": 111, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 251.1, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'1,983,690.00'} },
    { "id": 112, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 297.75, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'2,352,225.00'} },
    { "id": 113, "mzn": 8, "cls":"st7" , "categ": "AA", "mt": 402.25, "estatus": "Disponible", "precio":{ "lvnPM2":7900, "lvnP18":'3,177,775.00'} },
    { "id": 114, "mzn": 8, "cls":"st10" , "categ": "AAA", "mt": 457.71, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'3,707,451.00'} },
    { "id": 115, "mzn": 8, "cls":"st10" , "categ": "AAA", "mt": 291.88, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,364,228.00'} },
    { "id": 116, "mzn": 8, "cls":"st10" , "categ": "AAA", "mt": 261.98, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'2,122,038.00'} },
    { "id": 117, "mzn": 8, "cls":"st10" , "categ": "AAA", "mt": 237.69, "estatus": "Disponible", "precio":{ "lvnPM2":8100, "lvnP18":'1,925,289.00'} }    
];