// Ian Raçano Gonzalez 
// Gustavo Souza Lopes
// 13 / 08 / 2024

let DistanciaA,SegundosDesdeLancar1;
let DistanciaB,SegundosDesdeLancar2;


 SegundosDesdeLancar1 = prompt("Digite os segundos desde o lançamento 1:  "); 
    DistanciaA = (-SegundosDesdeLancar1 * SegundosDesdeLancar1) + (6 * SegundosDesdeLancar1) + 10;


    


     SegundosDesdeLancar2 =  prompt("Digite os segundos desde o lançamento 2:  ");
    DistanciaB = (-0.5 *(SegundosDesdeLancar2 * SegundosDesdeLancar2)) + 4 * SegundosDesdeLancar2 + 12;

    

alert("O valor da distância do A é de: " + DistanciaA);
alert("O valor da distância do B é de: " + DistanciaB)

alert("Portanto a distancia do atleta B por ser: " + DistanciaB + " é maior que do Atleta A: " + DistanciaA)

// 1. Atleta B alcança a maior distancia.

// 2. (Atleta B = 20 metros)
//  (Atleta A = 19)