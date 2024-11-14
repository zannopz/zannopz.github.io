#include <iostream>
#include <string>

int main() {
    std::string title = "Portfolio Zann_Opz";
    std::string items[3] = {"Item 1", "Item 2", "Item 3"};

    std::cout << "=========================" << std::endl;
    std::cout << "       " << title << std::endl;
    std::cout << "=========================" << std::endl;

    for(int i = 0; i < 3; i++) {
        std::cout << items[i] << " | Price: $45 | Product" << std::endl;
    }

    std::cout << "=========================" << std::endl;
    return 0;
}
