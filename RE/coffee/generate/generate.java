public class generate {
    public static void main(String args[]) {
        
         System.out.println("Hello, World!");

        int decimalArray[] = {104, 114, 51, 51, 95, 98, 49, 108, 108, 49, 48, 110, 95, 100, 51, 118, 49, 99, 51, 53, 55};
        int[] result = new int[decimalArray.length];
        
        // Rotate right by one element of array
        for(int i = 0; i < decimalArray.length; i++){
            result[(i+1) % decimalArray.length] = decimalArray[i];
        }
        String flagContent = "";

        for(int i = 0; i < result.length; i++){
            flagContent += (char)(result[i]);
        }

        String flag = "CYS{" + flagContent + "}";
    }
}