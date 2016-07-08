/*
 * Copyright 2016 svilupposw.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
package it.engim.templatedb;


import java.util.ArrayList;
import org.apache.wicket.extensions.markup.html.repeater.data.table.DefaultDataTable;
import org.apache.wicket.extensions.markup.html.repeater.data.table.IColumn;
import org.apache.wicket.extensions.markup.html.repeater.data.table.PropertyColumn;
import org.apache.wicket.markup.html.WebPage;
import org.apache.wicket.markup.html.form.Form;
import org.apache.wicket.markup.html.form.TextArea;
import org.apache.wicket.markup.html.form.TextField;
import org.apache.wicket.model.CompoundPropertyModel;
import org.apache.wicket.model.Model;

/**
 *
 * @author svilupposw
 */
public class Contattaci extends WebPage{
    private Contatti dati;
    public Contattaci() {
        ArrayList<IColumn<Contatti,String>>colonne=new ArrayList<IColumn<Contatti,String>>();
        
        colonne.add(new PropertyColumn<Contatti,String>
        (Model.of("Id"),"id"));
        colonne.add(new PropertyColumn<Contatti,String>
        (Model.of("Email"),"email"));
        colonne.add(new PropertyColumn<Contatti,String>
        (Model.of("Richiesta"),"richiesta"));
        
        dati = new Contatti();
        CompoundPropertyModel<Contatti>
                model = new CompoundPropertyModel<>(dati);
        Form c;
        c = new Form("formcontatti", model){
            @Override
            protected void onSubmit() {
                super.onSubmit(); //To change body of generated methods, choose Tools | Templates.
                ContattiDAO.salva(dati);
            }
        
        };
        
        TextField email = new TextField("email");
        c.add(email);
        TextArea ric = new TextArea("richiesta");
        c.add(ric);
        add(c);
        add(new DefaultDataTable<Contatti,String>(
                "contatti",colonne,
                new ContattiDataProvider(),10));
        add(new Menu("menu"));
    }
    
}
