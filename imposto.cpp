#include <iostream>

struct TabelaImposto2024 {
    double faixa1 = 1000.0;
    double faixa2 = 2000.0;
    double faixa3 = 3000.0;
    double aliquota1 = 0.1; // 10%
    double aliquota2 = 0.15; // 15%
    double aliquota3 = 0.2; // 20%
};

double calcularImposto(double renda, TabelaImposto2024 tabela) {
    double imposto = 0.0;

    if (renda <= tabela.faixa1) {
        imposto = renda * tabela.aliquota1;
    } else if (renda <= tabela.faixa2) {
        imposto = tabela.faixa1 * tabela.aliquota1 + (renda - tabela.faixa1) * tabela.aliquota2;
    } else {
        imposto = tabela.faixa1 * tabela.aliquota1 + (tabela.faixa2 - tabela.faixa1) * tabela.aliquota2 + (renda - tabela.faixa2) * tabela.aliquota3;
    }

    return imposto;
}

int main() {
    double rendaAnual = 2500.0; // Exemplo de renda anual

    TabelaImposto2024 tabela;

    double impostoPago = calcularImposto(rendaAnual, tabela);

    std::cout << "O valor pago de imposto de renda em 2024 �: R$ " << impostoPago << std::endl;

    return 0;
}









