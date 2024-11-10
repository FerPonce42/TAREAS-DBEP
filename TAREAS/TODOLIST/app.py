import requests

from flask import Flask, jsonify, render_template, request

app = Flask(__name__)


@app.route("/")
def index():
    return render_template("index.html")


@app.route("/convert", methods=["POST"])
def convert():

    # Consulta para obtener la tasa de cambio de divisas
    currency = request.form.get("currency")
    res = requests.get(
        "http://data.fixer.io/api/latest",
        params={"access_key": "b42cc38fe4cd5b869888c5a9902aeb3c", "symbols": currency}
    )

    # Asegurarse de que la solicitud fue exitosa
    if res.status_code != 200:
        return jsonify({"success": False})

    # Asegurarse de que la moneda esté en la respuesta
    data = res.json()
    if currency not in data.get("rates", []):
        return jsonify({"success": False})

    return jsonify({"success": True, "rate": data["rates"][currency]})