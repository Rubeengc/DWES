from operaciones import suma, resta, multiplicacion, division
def solicitar_numeros():
    num1 = float(input("Ingrese el primer número: "))
    num2 = float(input("Ingrese el segundo número: "))
    return num1, num2

def main():
    while True:
        num1, num2 = solicitar_numeros()

        operacion = input("¿Qué operación desea realizar? (1 para suma, 2 para resta, 3 para multiplicación, 4 para división): ")

        if operacion not in ['1', '2', '3', '4']:
            print("Operación no válida.")
            continue

        if operacion == '1':
            resultado = suma(num1, num2)
        elif operacion == '2':
            resultado = resta(num1, num2)
        elif operacion == '3':
            resultado = multiplicacion(num1, num2)
        elif operacion == '4':
            resultado = division(num1, num2)

        print(f"El resultado de la operación es: {resultado}")

        continuar = input("¿Desea hacer más operaciones? (s/n): ").lower()
        if continuar != 's':
            break

if __name__ == "__main__":
    main()