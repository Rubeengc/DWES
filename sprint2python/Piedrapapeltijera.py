import random

def jugar_piedra_papel_tijera(jugadas):
    opciones = ["piedra", "papel", "tijera"]
    resultados = {"piedra": "tijera", "papel": "piedra", "tijera": "papel"}
    puntaje_usuario = 0
    puntaje_maquina = 0

    for _ in range(jugadas):
        print("Elige una jugada: piedra, papel o tijera")
        jugada_usuario = input().lower()
        jugada_maquina = random.choice(opciones)

        if jugada_usuario in opciones:
            if jugada_usuario == jugada_maquina:
                print("Empate, nadie gana.")
            elif resultados[jugada_usuario] == jugada_maquina:
                puntaje_usuario += 1
                print(f"Ganaste, {jugada_usuario} gana a {jugada_maquina}.")
            else:
                puntaje_maquina += 1
                print(f"Perdiste, {jugada_maquina} gana a {jugada_usuario}.")
        else:
            print("Jugada no válida. Elige piedra, papel o tijera.")

    if puntaje_usuario > puntaje_maquina:
        print("Has ganado el juego!")
    elif puntaje_usuario < puntaje_maquina:
        print("Has perdido el juego.")
    else:
        print("El juego ha terminado en empate.")

jugar_piedra_papel_tijera(5)