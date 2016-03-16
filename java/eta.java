import java.util.Scanner;
//esercizio1
public class eta{
		public static void main(String[] args){
		int latuaeta = 0;	
		Scanner tastiera=new Scanner(System.in);
		System.out.print("Inserire lanno di nascita");
		int annonascita=tastiera.nextInt();
		Scanner tastiera2=new Scanner(System.in);
		System.out.print("Inserire lanno attuale");
		int annoattuale=tastiera2.nextInt();
		latuaeta=annoattuale-annonascita;
		System.out.println("Ciao la tua eta e "+latuaeta);
		}
}
