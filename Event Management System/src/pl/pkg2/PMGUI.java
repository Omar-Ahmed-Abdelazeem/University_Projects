package pl.pkg2;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class PMGUI extends JFrame {

    private JTextField idField, messageField;
    private JTextArea outputArea;
    private JButton sendPriceButton, viewPriceButton, viewBookingButton, sendBookingButton, contactCustomerButton;

    public PMGUI() {

        pmClass pm = new pmClass();

        setTitle("PM Management System");
        setSize(400, 500);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);

        setLayout(new FlowLayout());

        JLabel idLabel = new JLabel("Enter ID:");
        idField = new JTextField(20);

        sendPriceButton = new JButton("Send Price to Customer");
        viewPriceButton = new JButton("View Price");
        viewBookingButton = new JButton("View Booking");
        sendBookingButton = new JButton("Send Booking to SP");
        contactCustomerButton = new JButton("Contact Customer");

        messageField = new JTextField(20);
        outputArea = new JTextArea(10, 30);
        outputArea.setEditable(false);

        add(idLabel);
        add(idField);
        add(sendPriceButton);
        add(viewPriceButton);
        add(viewBookingButton);
        add(sendBookingButton);
        add(new JLabel("Message to Customer:"));
        add(messageField);
        add(contactCustomerButton);
        add(new JScrollPane(outputArea));

        sendPriceButton.addActionListener((var e) -> {
            try {
                int id = Integer.parseInt(idField.getText());
                //class is implemented
                pm.sendPriceToCustomer(id);
                outputArea.setText("Price sent to customer for ID: " + id);
            } catch (NumberFormatException ex) {
                outputArea.setText("Invalid ID or error in sending price.");
            }
        });

        viewPriceButton.addActionListener((ActionEvent e) -> {
            try {
                int id = Integer.parseInt(idField.getText());
//l class is implemented
                pm.viewPrice(id);
                outputArea.setText("Viewed bill for ID: " + id);
            } catch (NumberFormatException ex) {
                outputArea.setText("Invalid ID or error in viewing price.");
            }
        });

        viewBookingButton.addActionListener((ActionEvent e) -> {
            try {
                int id = Integer.parseInt(idField.getText());
//class is implemented
                String s = pm.viewBookingFromAdmin(id);
                outputArea.setText("Viewed booking for ID: " + id +"\n" + s);
            } catch (NumberFormatException ex) {
                outputArea.setText("Invalid ID or error in viewing booking.");
            }
        });

        sendBookingButton.addActionListener((var e) -> {
            try {
                int id = Integer.parseInt(idField.getText());
                //class is implemented
                pm.sentBookingToSP(id);
                outputArea.setText("Booking sent to Service Provider for ID: " + id);
            } catch (NumberFormatException ex) {
                outputArea.setText("Invalid ID or error in sending booking.");
            }
        });

        contactCustomerButton.addActionListener((var e) -> {
            try {
                String message = messageField.getText();
                int id = Integer.parseInt(idField.getText());
                String chatHistory = pm.contactCustomer(message, id);
                outputArea.setText("Chat history:\n" + chatHistory);
            } catch (NumberFormatException ex) {
                outputArea.setText("Error in contacting customer.");
            }
        });
    }

    public static void main(String[] args) {
        pmClass pm = new pmClass("John Doe", "john@example.com", "password123", "1234567890", "PM");
        PMGUI gui = new PMGUI();
        gui.setVisible(true);
    }
}
