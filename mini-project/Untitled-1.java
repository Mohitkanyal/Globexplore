// public class password(String a)// ! @ # $ % ^ & * ( ) - _ = + \ | [ ] { } ; : / ? . >
// {
// if(len(a)<9 && len(a)>11)
// {
// System.out.println("**Invalid Password**");
// }
// for(i=0;i<(len(a)-1);i++)
// {
// else if(c!=! && c!=@ && c!=# && c!=$ && c!=% && c!=^ && c!=& && c!=* && c!=- && c!=: && c!=?)
// {
//     System.out.println("**Invalid Password**");
// }
// }
// else
// {
//     System.out.println("**Valid Password**");
// }
// }
public class Main {
    static void password(String a)// ! @ # $ % ^ & * ( ) - _ = + \ | [ ] { } ; : / ? . >
{
if(a.length()<9 && a.length()>11)
{
System.out.println("**Invalid Password**");
}
for(i=0;i<a.length();i++)
{
    char c = a.charAt(i);
else if(c!='!' && c!='@' && c!='#' && c!='$' && c!=' % '&& c!='^' && c!='&' && c!='*' && c!='-' && c!=':' && c!='?')
{
    System.out.println("**Invalid Password**");
}
}
else
{
    System.out.println("**Valid Password**");
}
}
public static void main(String args[])
    {
String a="YashKanyal9136755";
password(a);
    }
}
