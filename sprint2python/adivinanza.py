def adivinanza():
    print("Adivinanza: Tengo hojas pero no soy un libro, me mueve el viento pero no soy una bandera. ¿Qué soy?")
    print("a) Un árbol")
    print("b) Un puro")
    print("c) Un ordenador")

    respuesta_correcta = "a"  

    respuesta_usuario = input("Ingresa tu respuesta (a, b, o c): ").lower() 
    if respuesta_usuario == respuesta_correcta:
        print("¡Correcto! La respuesta es correcta. Eres un experto en adivinanzas.")
    else:
        print("Respuesta incorrecta. La respuesta correcta es '" + respuesta_correcta + "'.")

if __name__ == "__main__":
    adivinanza()