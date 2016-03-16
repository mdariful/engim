import java.util.Scanner;

public class BICI{

     public static void main(String[] arg){
         Scanner tastiera= new Scanner(System.in);

         Bicicletta biciA;
         Bicicletta biciB;
         Bicicletta biciC;

         biciA = new Bicicletta("BMX","Giorgio",20,3);
         biciB = new Bicicletta("Graziella","Michela",5,1);
         biciC = new Bicicletta(1,10);

         // Prima serie incrementi
         System.out.println("inserisci incr. per biciA");
         int incrA= tastiera.nextInt();
         biciA.aumentaVelocita(incrA);

         System.out.println("inserisci incr. per biciB");
         int incrB= tastiera.nextInt();
         biciB.aumentaVelocita(incrB);

         System.out.println("inserisci incr. per biciC");
         int incrC= tastiera.nextInt();
         biciC.aumentaVelocita(incrC);


         // Seconda serie incrementi
         System.out.println("inserisci incr. per biciA");
         incrA= tastiera.nextInt();
         biciA.aumentaVelocita(incrA);

         System.out.println("inserisci incr. per biciB");
         incrB= tastiera.nextInt();
         biciB.aumentaVelocita(incrB);

         System.out.println("inserisci incr. per biciC");
         incrC= tastiera.nextInt();
         biciC.aumentaVelocita(incrC);

        // STAMPA STATO BICI
        System.out.println("---- BICI ------");
        biciA.stampaStato();
        biciB.stampaStato();
        biciC.stampaStato();


      Bicicletta biciMaxVel=biciA;      
      if(biciB.getVelocita()>biciMaxVel.getVelocita()){
          biciMaxVel=biciB;
      }
      if(biciC.getVelocita()>biciMaxVel.getVelocita()){
          biciMaxVel=biciC;
      }
   
     System.out.println("STAMPA BICI + VELOCE: ");
     biciMaxVel.stampaStato();    

 }


}
