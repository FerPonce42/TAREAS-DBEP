const express = require('express');
const app = express();
const port = 4001;

app.get('/saludo', (req, res) => {
  const nombre = req.query.nombre || 'desconocido';
  res.json({ mensaje: `¡Hola, ${nombre}!` });
});

app.get('/edad', (req, res) => {
  const id = req.query.id;
  if (id == 1) {
    res.json({ edad: 19 });
  } else {
    res.json({ edad: 15 });
  }
});

app.listen(port, () => {
  console.log(`Servidor REST listo en http://localhost:${port}`);
});
