/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mdariful;

/**
 *
 * @author svilupposw
 */
public class Alga extends Main {
    private String mare;
    private boolean commestibile;

    public String getMare() {
        return mare;
    }

    public void setMare(String mare) {
        this.mare = mare;
    }

    public boolean isCommestibile() {
        return commestibile;
    }

    public void setCommestibile(boolean commestibile) {
        this.commestibile = commestibile;
    }
    
    
    public void stampa{

    String frase = "L'alga"+getNome()+
                    ", che ha alt.media di "+ getAltezzaMedia()
                    (isCommestibile() ? "" : "non") + 
                    " è commestibile";
                    System.outprintln(frase);
    }
}
