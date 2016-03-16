import java.util.Scanner;

public class ProvaBici
{
	public static void main (String [] args)
	{
		Bici biciA = new Bici ( "Marco", "BMX", 50, 4);
		Bici biciB = new Bici ( "graziella", 30);
		Bici biciC = new Bici ( "Luca", "BMX", 60, 5);
		
		Scanner tastiera=new Scanner(System.in);
		System.out.println("Quanto vuoi aumentare la velocità di biciA?");
		double a=tastiera.nextInt();
		System.out.println("Quanto vuoi aumentare la velocità di biciB?");
		double b=tastiera.nextInt();
		System.out.println("Quanto vuoi aumentare la velocità di biciC?");
		double c=tastiera.nextInt();
		biciA.aumentaVelocita (a);
		biciB.aumentaVelocita (b);
		biciC.aumentaVelocita (c);
		System.out.println("Aumenta ancora la velocità di biciA di quanto?");
		double e=tastiera.nextInt();
		System.out.println("Aumenta ancora la velocità di biciB di quanto?");
		double f=tastiera.nextInt();
		System.out.println("Aumenta ancora la velocità di biciC di quanto?");
		double g=tastiera.nextInt();
		biciA.aumentaVelocita (e);
		biciB.aumentaVelocita (f);
		biciC.aumentaVelocita (g);
		biciA.stampaStato();
		biciB.stampaStato();
		biciC.stampaStato();
		System.out.println("La bici più veloce è");
		if (biciA.getVelocita()>=biciB.getVelocita() && biciA.getVelocita()>=biciC.getVelocita())
			biciA.stampaStato();
		else if (biciB.getVelocita()>=biciA.getVelocita() && biciB.getVelocita()>=biciC.getVelocita())
			biciB.stampaStato();
		else biciC.stampaStato();		
	}
}
