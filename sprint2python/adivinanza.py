import random

def adivinanza():
    puntuacion = 0

    adivinanzas = {
        1: {
            "pregunta": "Tengo hojas pero no soy un libro, me mueve el viento pero no soy una bandera. ¿Qué soy?",
            "opciones": {
                "a": "Un árbol",
                "b": "Un puro",
                "c": "Un ordenador",
            },
            "respuesta_correcta": "a",
        },
        2: {
            "pregunta": "Soy redondo, a veces grande y a veces pequeño, y me usan para jugar en equipos. ¿Qué soy?",
            "opciones": {
                "a": "Una pizza",
                "b": "Un balón",
                "c": "Un reloj de arena",
            },
            "respuesta_correcta": "b",
        },
        3: {
            "pregunta": "Tengo teclas pero no puedo tocar música, tengo letras pero no puedo leer. ¿Qué soy?",
            "opciones": {
                "a": "Una calculadora",
                "b": "Un piano",
                "c": "Un teléfono",
            },
            "respuesta_correcta": "c",
        },
    }

    adivinanzas_seleccionadas = random.sample(list(adivinanzas.values()), 2)

    for adivinanza in adivinanzas_seleccionadas:
        print(f"Adivinanza: {adivinanza['pregunta']}")
        for opcion, respuesta in adivinanza['opciones'].items():
            print(f"{opcion}) {respuesta}")

        respuesta_usuario = input("Ingresa tu respuesta (a, b, o c): ").lower()

        if respuesta_usuario == adivinanza['respuesta_correcta']:
            print("¡Correcto! La respuesta es correcta. Sumas 10 puntos.")
            puntuacion += 10
        else:
            print(f"Respuesta incorrecta. La respuesta correcta es '{adivinanza['respuesta_correcta']}'. Restas 5 puntos.")
            puntuacion -= 5

    print("\nPuntuación total: " + str(puntuacion) + " puntos")

if __name__ == "__main__":
    adivinanza()