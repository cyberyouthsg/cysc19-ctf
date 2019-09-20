# Coffee

I wanted to learn Java so I decided to code a simple program, but I seem to have lost my source code.

### Hint

1. Decompilation

## Deployment

Run `javac generate/generate.java` to compile to source code to bytecode, found in the `distrib` folder.

- generate.class
    - SHA1: `0e800dfcb04dfa6e92f6b4f6de8d30125a31f971`
    - Java bytecode file

## Solution

Using a decompiler, such as [JD-GUI](http://java-decompiler.github.io/), we can translate the bytecode back to Java code as shown below:

```java
public class generate
{
  public static void main(String[] paramArrayOfString) {
    System.out.println("Hello, World!");
    
    int[] arrayOfInt1 = { 104, 114, 51, 51, 95, 98, 49, 108, 108, 49, 48, 110, 95, 100, 51, 118, 49, 99, 51, 53, 55 };
    int[] arrayOfInt2 = new int[arrayOfInt1.length];

    for (byte b1 = 0; b1 < arrayOfInt1.length; b1++) {
      arrayOfInt2[(b1 + true) % arrayOfInt1.length] = arrayOfInt1[b1];
    }

    String str1 = "";
    
    for (byte b2 = 0; b2 < arrayOfInt2.length; b2++) {
      str1 = str1 + (char)arrayOfInt2[b2];
    }
    
    String str2 = "CYS{" + str1 + "}";
  }
}
```

We can see that the flag contents are generated from the variable `str1`, we can attain the flag by adding a print statement to print the contents of `str1`.

### Flag
`CYS{7hr33_b1ll10n_d3v1c35}`
