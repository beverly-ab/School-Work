#include <iostream>

main()
{
    int count = 3;
    while (--count > 0)
    {
        std::cout << count;
    }

    int idx;
    for (idx = 0; idx < 10; idx = idx + 3)
    {
        std::cout << idx;
    }

    int count = 1;
    do
    {
        std::cout << count;
    } while (count++ <= 3);

    int idx;
    for (idx = 5; idx < 9; idx++)
    {
        if (idx == 7)
        {
            continue;
        }
        std::cout << idx;
    }
}