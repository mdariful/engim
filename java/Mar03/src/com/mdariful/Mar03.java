/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mdariful;



import java.util.Date;
import mar01.Documento;
import mar01.Fattura;
import mar01.Ordine;
import mar01.Preventivo;

/**
 *
 * @author svilupposw
 */
public class Mar03 {
    /**
     * aspetta un array di interi
     * @param arr
     */
    public static void ordina(int[] arr)
    {
       
        /**
         * supponiamo che le temperature sono già in ordine
         */
        boolean inOrdine = false;
        /**
         * finche l'ordine non è in ordine continua a ciclare
         */
        while (!inOrdine)
        {
            /**
             * conto un'elemento in meno in quanto non devo confrontare l'ultimo elemento
             */
            inOrdine = true;
            for (int i = 0; i<arr.length-1; i++)
            {
                if(arr[i] > arr[i+1])
                {
                    /**
                     * utilizzo la variabile temporanea per lo scambio dei numeri
                     */
                    int tmp = arr[i];
                    arr[i] = arr[i+1];
                    arr[i+1] = tmp;
                    inOrdine = false;
                }
            }
        }
        
    }
    
    /**
     * ordine array documenti
     * @param arr
     */
        public static void ordina(Documento[] arr)
    {
       
        /**
         * supponiamo che le temperature sono già in ordine
         */
        boolean inOrdine = false;
        /**
         * finche l'ordine non è in ordine continua a ciclare
         */
        while (!inOrdine)
        {
            /**
             * conto un'elemento in meno in quanto non devo confrontare l'ultimo elemento
             */
            inOrdine = true;
            for (int i = 0; i<arr.length-1; i++)
            {
                Date dataDoc1 = arr[i].getDataEmissione();
                Date dataDoc2 = arr[i+1].getDataEmissione();
                int test = dataDoc1.compareTo(dataDoc2);
                if(test>0 )
                {
                    /**
                     * utilizzo la variabile temporanea per lo scambio dei numeri
                     */
                    Documento tmp = arr[i];
                    arr[i] = arr[i+1];
                    arr[i+1] = tmp;
                    inOrdine = false;
                }
            }
        }
        
    }
    /**
     * ordine array documenti
     * @param arr
     * @param c
     */
        public static void ordina(Object[] arr, Confrontabile c)
    {
       
        /**
         * supponiamo che le temperature sono già in ordine
         */
        boolean inOrdine = false;
        /**
         * finche l'ordine non è in ordine continua a ciclare
         */
        while (!inOrdine)
        {
            /**
             * conto un'elemento in meno in quanto non devo confrontare l'ultimo elemento
             */
            inOrdine = true;
            for (int i = 0; i < arr.length-1; i++)
            {
               
                if(c.confronta(arr[i], arr[i+i]) > 0)
                {
                    /**
                     * utilizzo la variabile temporanea per lo scambio dei numeri
                     */
                    Object tmp = arr[i];
                    arr[i] = arr[i+1];
                    arr[i+1] = tmp;
                    inOrdine = false;
                }
            }
        }
        
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    /*    int[] temperature = {
          17, 15, 8, 22, 26, 21  
        };
    ordina(temperature);
    for(int t: temperature)
    System.out.println(t);
    }*/
    Object[] docs ={
      new Fattura(),
      new Ordine(),
      new Preventivo()
    };
    /*CriterioPerNumero cpn = new CriterioPerNumero();
    ordina(docs, cpn);*/
    
    ordina(docs, new Confrontabile()
    {

        @Override
        public int confronta(Object o1, Object o2) {
        Documento d1 = (Documento)o1;
        Documento d2 = (Documento)o2;
        return d1.getNumero()-d2.getNumero();
        }
    
    });
     for(Object d: docs)
    ((Documento)d).stampa();
    }
    
   
}
