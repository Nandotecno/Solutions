#include <stdio.h>
#include <string.h>
#include <ctype.h>

int validar_cpf(const char *cpf) {
    // Verifica se o CPF tem 11 dígitos
    if (strlen(cpf) != 11) {
        return 0; // CPF inválido
    }

    // Verifica se todos os caracteres são dígitos
    for (int i = 0; i < 11; i++) {
        if (!isdigit(cpf[i])) {
            return 0; // CPF inválido
        }
    }

    return 1; // CPF válido
}

int main() {
    char cpf[12]; // CPF sem formatação (11 dígitos + 1 para o terminador)

    printf("Digite o CPF (somente números): ");
    scanf("%11s", cpf); // Lê até 11 caracteres

    // Valida o CPF
    if (validar_cpf(cpf)) {
        printf("CPF OK\n");
    } else {
        printf("CPF inválido. Certifique-se de que possui 11 dígitos.\n");
    }

    return 0;
}
