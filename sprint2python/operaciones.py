def suma(a, b):
    return a + b

def resta(a, b):
    return a - b

def multiplicacion(a, b):
    return a * b

def division(a, b):
    if b == 0:
        return "Error: División por 0"
    else:
        return a / b

if __name__ == "__main__":
    print("Operaciones disponibles:")
    print("1. Suma")
    print("2. Resta")
    print("3. Multiplicación")
    print("4. División")

    opcion = int(input("Selecciona una operación (1/2/3/4): "));

    if opcion in [1, 2, 3, 4]:
        num1 = float(input("Ingresa el primer número: "))
        num2 = float(input("Ingresa el segundo número: "))

        if opcion == 1:
            resultado = suma(num1, num2)
            print(f"El resultado de la suma es: {resultado}")
        elif opcion == 2:
            resultado = resta(num1, num2)
            print(f"El resultado de la resta es: {resultado}")
        elif opcion == 3:
            resultado = multiplicacion(num1, num2)
            print(f"El resultado de la multiplicación es: {resultado}")
        elif opcion == 4:
            resultado = division(num1, num2)
            print(f"El resultado de la división es: {resultado}")
    else:
        print("Opción no válida. Por favor, selecciona una operación válida (1/2/3/4).")
