package main

import (
	"fmt"
	"net"
	"time"
)

func main() {
	// Target to scan scanme.nmap.org:80
	target := "scanme.nmap.org"
	for port := 1; port <= 100; port++ {
		address := fmt.Sprintf("%s:%d", target, port)
		conn, err := net.DialTimeout("tcp", address, 2*time.Second)
		if err != nil {
			continue
			// fmt.Println("port is CLOSED")
			// os.Exit(1)
		}
		fmt.Println("[OPEN] Connection established from",
			conn.LocalAddr().String(), "to", conn.RemoteAddr().String(), "via", conn.RemoteAddr().Network(), port)
		conn.Close()

	}

}
