#include <stdio.h>
#include <string.h>
#include <ctype.h>

int validar_cpf(const char *cpf) {
    // Verifica se o CPF tem 11 d�gitos
    if (strlen(cpf) != 11) {
        return 0; // CPF inv�lido
    }

    // Verifica se todos os caracteres s�o d�gitos
    for (int i = 0; i < 11; i++) {
        if (!isdigit(cpf[i])) {
            return 0; // CPF inv�lido
        }
    }

    return 1; // CPF v�lido
}

int main() {
    char cpf[12]; // CPF sem formata��o (11 d�gitos + 1 para o terminador)

    printf("Digite o CPF (somente n�meros): ");
    scanf("%11s", cpf); // L� at� 11 caracteres

    // Valida o CPF
    if (validar_cpf(cpf)) {
        printf("CPF OK\n");
    } else {
        printf("CPF inv�lido. Certifique-se de que possui 11 d�gitos.\n");
    }

    return 0;
}
