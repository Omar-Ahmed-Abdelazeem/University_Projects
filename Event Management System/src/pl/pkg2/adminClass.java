
package pl.pkg2;

import java.io.IOException;

import static pl.pkg2.FileHandling.appendFile;
import static pl.pkg2.FileHandling.readFile;
import static pl.pkg2.FileHandling.writeFile;

public class adminClass extends Human {

    public adminClass(String name, String email, String password, String phone, String role) {
        super(name, email, password, phone, role);
    }
    
    public adminClass(){
    }

    // Creates a new account for users (Customer, SP, PM, Admin)
    public int createAccount(Human user) {
        try {
            // Create file name based on role
            String fileName = user.role.toLowerCase();
            
            // The ID is already set in the Human constructor, so we don't need to set it here
            
            String userData = user.id + "-" + user.name + "-" + user.email + "-" + 
                            user.password + "-" + user.phone + "-" + user.role;
            
            // Add the new user data to its role file
            return appendFile(fileName, userData + "\n");
        } catch (IOException e) {
            System.err.println("Error creating account: " + e.getMessage());
            return -1;
        }
    }

    // Update a user by their ID
    public int updateUserById(int id, String fileName, String newString, int field) {
        
        try {
            
            Human updatedUser = new pmClass();
            updatedUser.objectify(id, fileName, updatedUser);
            
            switch(field){
            case 1 -> updatedUser.name     = newString;
            case 2 -> updatedUser.phone    = newString;
            case 3 -> updatedUser.email    = newString;
            case 4 -> updatedUser.password = newString;
            default -> throw new IllegalArgumentException("Invalid field value: " + field);
            
        }
                
            String fileContent = readFile(fileName);

            String[] users = fileContent.split("\n");
            StringBuilder updatedContent = new StringBuilder();
            boolean updated = false;

            // Update the specific user by ID
            for (String user : users) {
                String[] userInfo = user.split("-");
                if (userInfo[0].equals(updatedUser.id)) {
                    updatedContent.append(updatedUser.id).append("-")
                            .append(updatedUser.name).append("-")
                            .append(updatedUser.email).append("-")
                            .append(updatedUser.password).append("-")
                            .append(updatedUser.phone).append("-")
                            .append(updatedUser.role).append("\n");
                    updated = true;
                } else {
                    updatedContent.append(user).append("\n"); // if the user doesnt match to keep the info of that user checked as it is
                }
            }

            if (updated) {
                // Overwrite the file with updated content
                writeFile(fileName, updatedContent.toString());
                return 1;
            } else {
                return -1; // User not found
            }

        } catch (IOException e) {
            System.err.println("invalid user");
            return -1;
        }
    }

    // Delete a user by ID
    public int deleteUserById(String idToDelete, String role) {
        try {
            String fileName = role.toLowerCase();
            String fileContent = readFile(fileName);

            String[] users = fileContent.split("\n");
            StringBuilder updatedContent = new StringBuilder();

            boolean deleted = false;

            // Delete the user by ID
            for (String user : users) {
                String[] userInfo = user.split("-");
                if (userInfo[0].equals(idToDelete))  {
                    deleted = true; // Mark user to be deleted
                } else {
                    updatedContent.append(user).append("\n"); // if the user doesnt match to keep the info of that user checked as it is
                }
            }

            if (deleted) {
                // delete the user from file and update
                writeFile(fileName, updatedContent.toString());
                return 1;
            } else {
                return -1; // User not found
            }

        } catch (IOException e) {
            System.err.println("error updating user");
            return -1;
        }
    }

    // Receive message and add it to a file
    public int receiveMessageFromCustomer(String message, int customerId) {
        try {
            String fileName = "Contact_" + customerId; // Contact file based on customer ID
            String contactMessage = "Customer(" + customerId + "): " + message + "\n";

            // Add message to the file
            appendFile(fileName, contactMessage);
            return 1;

        } catch (IOException e) {
            System.err.println("invalid message");
            return -1;
        }
    }
    //send messagee to pm in file
    public int sendCustomerRequestToPM(int id) {
        
        Booking booking = new Booking(); // Create an empty Booking object
        try {
            booking.objectify(id, booking); // Populate the object with data
            booking.bookingState = 1;// Set requestState to 1
            writeFile(id+"_booking", booking.toString()+ "\n" + booking.bookingState);
            System.out.println("Booking sent to PM.");
            return 1;
        } catch (IOException e) {
           System.err.println("Error sending request to PM");
            return -1;
        }
}
            
//        try {
//            // Create a message to be forwarded from the customer to the PM
//            String message = "Customer (" + customerId + "): " + request + "\n";
//
//            // pm file creator
//            String pmFileName = "Contact_PM" + pmId;
//
//            // Add message to PM contact file
//            return appendFile(pmFileName, message);
//
//        } catch (IOException e) {
//            System.err.println("Error sending request to PM");
//            return -1;
//        }
    
    public static int login(String email, String password, String fileName) {
    try {
        
        String fileContent = readFile(fileName.toLowerCase()); // Read the content of the file

        String[] users = fileContent.split("\n");

        // Loop through each admin
        for (String user : users) {
            String[] userInfo = user.split("-"); // Split each line into user info based on the delimiter

            // Check if email and password match
            if (userInfo[2].equals(email) && userInfo[3].equals(password)) {
                return 1; // Login success
            }
        }

        return 0; // Login failed, 
    } catch (IOException e) {
        System.err.println("Error reading file");
        return -1; // Error while reading file
    }
}

}
