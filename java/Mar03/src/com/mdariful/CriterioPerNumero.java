/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mdariful;

import mar01.Documento;

/**
 *
 * @author svilupposw
 */
public class CriterioPerNumero implements Confrontabile{
    
    @Override  
    public int confronta(Object o1, Object o2)
    {
        Documento d1 = (Documento)o1;
        Documento d2 = (Documento)o2;
        return d1.getNumero()-d2.getNumero();
    }
}
