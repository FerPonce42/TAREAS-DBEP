const express = require('express');
const app = express();
const port = 4001;

app.get('/saludo', (req, res) => {
  const nombre = req.query.nombre || 'desconocido';
  res.json({ mensaje: `¡Hola, ${nombre}!` });
});

app.listen(port, () => {
  console.log(`Servidor REST listo en http://localhost:${port}`);
});
