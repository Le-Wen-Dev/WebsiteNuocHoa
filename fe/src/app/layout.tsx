import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";
import Home from "./home/page";

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "Create Next App",
  description: "Generated by create next app",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className={inter.className}>
        <div className=" container mx-4 p-5">
          <Home />
          {children}
        </div>
      </body>
    </html>
  );
}
