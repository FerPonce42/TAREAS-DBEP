const { ApolloServer, gql } = require('apollo-server');

const typeDefs = gql`
  type Query {
    saludo(nombre: String): String
    edad(id: Int): Int
  }
`;

const resolvers = {
  Query: {
    saludo: (_, { nombre }) => {
      return `¡Hola, ${nombre || 'desconocido'}!`;
    },
    edad: (_, { id }) => {
      return id === 1 ? 19 : 15;
    },
  },
};

const server = new ApolloServer({
  typeDefs,
  resolvers,
});

server.listen().then(({ url }) => {
  console.log(`Servidor GraphQL listo en ${url}`);
});
