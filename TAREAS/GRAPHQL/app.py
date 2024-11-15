from ariadne import QueryType, make_executable_schema
from ariadne.asgi import GraphQL
import uvicorn

from ariadne import load_schema_from_path
type_defs = load_schema_from_path("schema.graphql")

query = QueryType()

from resolvers import resolver_hola, resolver_saludo, resolver_obtenerPersona

query.set_field("hola", resolver_hola)
query.set_field("saludo", resolver_saludo)
query.set_field("obtenerPersona", resolver_obtenerPersona)

esquema = make_executable_schema(type_defs, query)

app = GraphQL(esquema)

if __name__ == "__main__":
    uvicorn.run(app, host="127.0.0.1", port=8000)
