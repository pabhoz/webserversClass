'use strict';

const express = require('express');

// Constants
const PORT = 3000;
const HOST = 'localhost';

// App
const app = express();
app.get('/', (req, res) => {
  const data = {
    nombre: "Pablo Bejarano",
    moni: "Laura"
  }
  res.send(JSON.stringify(data));
});

app.get('/zapatos/tallas/:talla', (req, res) => {
  const talla = req.params["talla"];
  res.send(`Zapatos de talla ${talla}`);
});

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);
