import java.util.Scanner;

public class array1 {
  public static void main(String[] args) {

Scanner input = new Scanner(System.in);
   int[] numbers = new int[5];
   System.out.print("Inserire " + numbers.length + " valori:");
   for(int index = 0; index < numbers.length; index++){
     numbers[index] = input.nextInt(); 
     System.out.println(numbers[index]);
	}

  }
}
