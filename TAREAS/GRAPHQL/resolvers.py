def resolver_hola(obj, info):
    return "¡Hola, DBEP!"

def resolver_saludo(obj, info, nombre):
    return f"¡Hola, {nombre}!"

personas_db = {
    "1": {"id": "1", "nombre": "Fernando", "edad": 19},
    "2": {"id": "2", "nombre": "Ángel", "edad": 15}
}

def resolver_obtenerPersona(obj, info, id):
    return personas_db.get(id)
