/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package formulaire;

import java.sql.Connection;
import java.sql.DriverManager;
import javax.swing.JOptionPane;


public class Connexion {
 
    Connection con; 
    public Connexion(){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            con= DriverManager.getConnection("jdbc:mysql://localhost:3306/calcul","root","");
           // JOptionPane.showMessageDialog(null, "connexion reussie");
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "echec de connexion"+e);
        }
    }
    
}

                    
        
        

