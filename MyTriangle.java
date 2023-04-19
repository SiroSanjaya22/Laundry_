import java.util.Scanner;
public class MyTriangle{
int length;
MyTriangle(){
}
MyTriangle(int length) {
this.length=length;
}
void setLength(int length) {
this.length=length;
}
int getLength(){
return length;
}
void draw() {
}
void drawFromRight () {
for (int i=1;i<=length;i++)
{
for(int j=length ;j>=i;j--) {
System.out.print(" ");
}
for(int k=1;k<=i;k++)
{
System.out.print("*");
}
System.out.println();
}
}
}
class main{
public static void main(String[] args) {
System.out.print("Input the Lenght: ");
Scanner scanner = new Scanner(System.in);
int length = scanner.nextInt();
System.out.print("Output: ");
MyTriangle t = new MyTriangle();
t.setLength(length);
t.drawFromRight();
}
}