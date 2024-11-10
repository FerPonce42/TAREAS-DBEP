from flask import Flask
#inicializar:
app= Flask(__name__) #archivo para arrancar la aplicacion
#ruta del servidor:
@app.route('/')#decorador:funcion que envuelve y reemplaza en otra(tipo polimorfismo?)

#crear funcion:
def home():
    return 'Hola mundo'
if __name__ == '__main__':
    app.run()

#crear otra ruta mas:
@app.route('about')
def about():
    return 'About Page'

if __name__=='__main__':
    app.run