package pl.pkg2;

import java.io.IOException;

import static pl.pkg2.FileHandling.readFile;

public abstract class Human implements humanInterface{
    protected String id;
    protected String name;
    protected String email;
    protected String password;
    protected String phone;
    protected String role;
    protected static final String ME = "saif"; 
    
    public Human(String name, String email, String password, String phone, String role) {
        this.name = name;
        this.email = email;
        this.password = password;
        this.phone = phone;
        this.role = role;
        // Initialize ID using the role's file
        try {
            this.id = String.valueOf(getLastId(role.toLowerCase()) + 1);
        } catch (Exception e) {
            System.err.println("Error initializing ID: " + e.getMessage());
            this.id = "0";
        }
    }
    
    public Human() {
    }
    
    protected static int getLastId(String fileName) {
        try {
            String fileContent = readFile(fileName);
            if (fileContent.isEmpty()) {
                return 0;
            }
            
            String[] users = fileContent.split("\n");
            int maxId = 0;
            
            for (String user : users) {
                String[] userInfo = user.split("-");
                if (userInfo.length > 0) {
                    try {
                        int currentId = Integer.parseInt(userInfo[0]);
                        if (currentId > maxId) {
                            maxId = currentId;
                        }
                    } catch (NumberFormatException e) {
                        System.err.println("Invalid ID format found: " + userInfo[0]);
                    }
                }
            }
            return maxId;
        } catch (IOException e) {
            System.err.println("Error reading file for ID: " + e.getMessage());
            return 0;
        }
    }
    
    public void objectify(int id, String fileName, Human p) throws IOException {
        String f = readFile(fileName);
        String[] users = f.split("\n");
        for (String user : users) {
            if (user.startsWith(id + "")) {
                String[] userInfo = user.split("-");
                p.id = userInfo[0];
                p.name = userInfo[1];
                p.email = userInfo[2];
                p.password = userInfo[3];
                p.phone = userInfo[4];
                p.role = userInfo[5];
            }
        }
    }
    
    @Override
    public String toString() {
        return "Person{ " + "name=" + name + "- email=" + email + "- password=" + password + 
               "- phone=" + phone + "- role=" + role + '}';
    }
    
    @Override
        public String getId(int id){
            return this.id+"";
        }

}