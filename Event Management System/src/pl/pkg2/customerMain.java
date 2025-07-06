package pl.pkg2;

import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.HeadlessException;
import java.awt.Insets;
import java.awt.event.ActionEvent;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;

public class customerMain extends JFrame {

    public customerMain() {
        setTitle("Customer Main GUI");
        setSize(500, 800);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new GridBagLayout());

        GridBagConstraints gbc = new GridBagConstraints();
        gbc.insets = new Insets(5, 5, 5, 5);
        gbc.fill = GridBagConstraints.HORIZONTAL;

        // Booking Section
        gbc.gridx = 0;
        gbc.gridy = 0;
        add(new JLabel("Booking Details:"), gbc);

        gbc.gridy++;
        add(new JLabel("Name:"), gbc);
        JTextField bookingNameField = new JTextField(15);
        gbc.gridx = 1;
        add(bookingNameField, gbc);

        gbc.gridx = 0;
        gbc.gridy++;
        add(new JLabel("Date (YYYY-MM-DD):"), gbc);
        JTextField bookingDateField = new JTextField(15);
        gbc.gridx = 1;
        add(bookingDateField, gbc);

        gbc.gridx = 0;
        gbc.gridy++;
        add(new JLabel("Place:"), gbc);
        JTextField bookingPlaceField = new JTextField(15);
        gbc.gridx = 1;
        add(bookingPlaceField, gbc);

        gbc.gridx = 0;
        gbc.gridy++;
        add(new JLabel("Number of Meals:"), gbc);
        JTextField bookingMealsField = new JTextField(5);
        gbc.gridx = 1;
        add(bookingMealsField, gbc);

        gbc.gridx = 0;
        gbc.gridy++;
        add(new JLabel("Number of People:"), gbc);
        JTextField bookingPeopleField = new JTextField(5);
        gbc.gridx = 1;
        add(bookingPeopleField, gbc);

        gbc.gridx = 0;
        gbc.gridy++;
        add(new JLabel("Number of Hours:"), gbc);
        JTextField bookingHoursField = new JTextField(5);
        gbc.gridx = 1;
        add(bookingHoursField, gbc);

        JButton bookButton = new JButton("Book");
        gbc.gridy++;
        gbc.gridx = 1;
        add(bookButton, gbc);

        // Manage Booking Section
        gbc.gridx = 0;
        gbc.gridy++;
        add(new JLabel("Old Value:"), gbc);

        JTextField oldValueField = new JTextField(10);
        gbc.gridx = 1;
        add(oldValueField, gbc);

        gbc.gridy++;
        gbc.gridx = 0;
        add(new JLabel("New Value:"), gbc);

        JTextField newValueField = new JTextField(10);
        gbc.gridx = 1;
        add(newValueField, gbc);

        JButton manageBookingButton = new JButton("Manage Booking");
        gbc.gridy++;
        gbc.gridx = 1;
        add(manageBookingButton, gbc);

        // Contact PM Section
        gbc.gridy++;
        gbc.gridx = 0;
        add(new JLabel("Message to PM:"), gbc);

        JTextField contactField = new JTextField(15);
        gbc.gridx = 1;
        add(contactField, gbc);

        JButton contactButton = new JButton("Contact PM");
        gbc.gridy++;
        gbc.gridx = 1;
        add(contactButton, gbc);

        gbc.gridy++;
        gbc.gridx = 0;
        add(new JLabel("Chat History:"), gbc);

        JTextArea chatHistoryArea = new JTextArea(10, 30);
        chatHistoryArea.setEditable(false);
        JScrollPane scrollPane = new JScrollPane(chatHistoryArea);
        gbc.gridy++;
        gbc.gridx = 0;
        gbc.gridwidth = 2;
        add(scrollPane, gbc);

        // Check Bill Section
        gbc.gridy++;
        gbc.gridx = 0;
        gbc.gridwidth = 2;  // Make the label span both columns
        add(new JLabel("Check Reservation Details:"), gbc);

        gbc.gridy++;
        gbc.gridwidth = 1;  // Reset to single column
        add(new JLabel("Enter ID:"), gbc);

        JTextField reservationField = new JTextField(15);
        gbc.gridx = 1;
        add(reservationField, gbc);

        JTextArea reservationDetails = new JTextArea(3, 30);
        reservationDetails.setEditable(false);
        JScrollPane detailsScrollPane = new JScrollPane(reservationDetails);
        gbc.gridy++;
        gbc.gridx = 0;
        gbc.gridwidth = 2;  // Make the text area span both columns
        add(detailsScrollPane, gbc);

        JButton checkBillButton = new JButton("Check Price/State");
        gbc.gridy++;
        gbc.gridx = 1;
        gbc.gridwidth = 1;  // Reset to single column
        add(checkBillButton, gbc);
        
        // Event Listeners
        bookButton.addActionListener((ActionEvent evt) -> {
            try {
                String name = bookingNameField.getText().trim();
                String date = bookingDateField.getText().trim();
                String place = bookingPlaceField.getText().trim();
                int meals = Integer.parseInt(bookingMealsField.getText().trim());
                int people = Integer.parseInt(bookingPeopleField.getText().trim());
                int hours = Integer.parseInt(bookingHoursField.getText().trim());

                Booking booking = new Booking(name, date, place, meals, people, hours);
                int id = Integer.parseInt(JOptionPane.showInputDialog("Enter Customer ID:"));
                customerClass customer = new customerClass("Default", "default@example.com", "password", "123456789", "Customer");
                customer.book(booking, id);

                showMessage("Booking saved successfully!");
                clearBookingFields(bookingNameField, bookingDateField, bookingPlaceField, bookingMealsField, bookingPeopleField, bookingHoursField);
            } catch (Exception e) {
                showError("Error: " + e.getMessage());
            }
        });

        manageBookingButton.addActionListener((ActionEvent evt) -> {
            String oldValue = oldValueField.getText().trim();
            String newValue = newValueField.getText().trim();
            if (oldValue.isEmpty() || newValue.isEmpty()) {
                showError("Both old and new values must be provided.");
                return;
            }
            try {
                int id = Integer.parseInt(JOptionPane.showInputDialog("Enter Customer ID:"));
                Booking booking = new Booking();
                customerClass customer = new customerClass("Default", "default@example.com", "password", "123456789", "Customer");
                int result = customer.manageBooking(booking, oldValue, newValue, id);
                if (result == 1) {
                    showMessage("Booking updated successfully!");
                } else {
                    showError("Error updating booking.");
                }
                oldValueField.setText("");
                newValueField.setText("");
            } catch (HeadlessException | NumberFormatException e) {
                showError("Error: " + e.getMessage());
            }
        });

        // Contact PM Button Action
        contactButton.addActionListener((ActionEvent evt) -> {
            String message = contactField.getText().trim();
            if (message.isEmpty()) {
                showError("Message cannot be empty.");
                return;
            }
            try {
                int id = Integer.parseInt(JOptionPane.showInputDialog("Enter Customer ID:"));
                customerClass customer = new customerClass("Default", "default@example.com", "password", "123456789", "Customer");
                String chatHistory = customer.contactPM(message, id);
                chatHistoryArea.setText(chatHistory); // Update chat history in text area
                showMessage("Message sent.");
                contactField.setText("");
            } catch (Exception e) {
                showError("Error: " + e.getMessage());
            }
        });

            checkBillButton.addActionListener((ActionEvent evt) -> {
                String reservationText = reservationField.getText().trim();
                if (reservationText.isEmpty()) {
                    showError("Reservation number cannot be empty.");
                    return;
                }
                try {
                    int id = Integer.parseInt(reservationText);
                    Bill b = new Bill(); 
                    b.objectify(id, b);// Assuming checkState returns a String with both price and state information
                    String details = b.toString();
                    reservationDetails.setText(details);  // Display the results in the text area
                } catch (Exception e) {
                    showError("Error: " + e.getMessage());
                }
            });

        setVisible(true);
    }

    private void clearBookingFields(JTextField... fields) {
        for (JTextField field : fields) {
            field.setText("");
        }
    }

    private void showError(String message) {
        JOptionPane.showMessageDialog(this, message, "Error", JOptionPane.ERROR_MESSAGE);
    }

    private void showMessage(String message) {
        JOptionPane.showMessageDialog(this, message, "Message", JOptionPane.INFORMATION_MESSAGE);
    }

    public static void main(String[] args) {
        new customerMain();
    }
}
