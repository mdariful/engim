import  java.util.Scanner;

class array2 {
public static void main(String a[]){

    Scanner input = new Scanner(System.in);

    System.out.println("dimensione dell array?");

    int num = input.nextInt();

    System.out.println("Inserire lelemento "+num+" dell array");

    double[] numbers = new double[num];

    for (int i = 0; i < numbers.length; i++)
    {

        System.out.println("Inserisci un numero");

        numbers[i] = input.nextDouble();

    }

    for (int i = 0; i < numbers.length; i++)
    {

        if ( (i%3) !=0){

            System.out.print("");

            System.out.print(numbers[i]+"\t");

        } else {
            System.out.println("");

            System.out.print(numbers[i]+"\t");
        }

    }

}
}
