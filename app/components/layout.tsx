import { Inter } from "next/font/google";
import Navbarpage from "../components/Navbar/page";
const inter = Inter({ subsets: ["latin"] });

export default function RootLayout({ 
  
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className={inter.className}>
        <Navbarpage/>
        {children}

        </body>
    </html>
  );
}
