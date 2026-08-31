package blackjack

// ParseCard returns the integer value of a card following blackjack ruleset.
func ParseCard(card string) int {
	switch card {
	case "ace":
		return 11
	case "two":
		return 2
	case "three":
		return 3
	case "four":
		return 4
	case "five":
		return 5
	case "six":
		return 6
	case "seven":
		return 7
	case "eight":
		return 8
	case "nine":
		return 9
	case "ten", "jack", "queen", "king":
		return 10
	default:
		return 0
	}
}

// FirstTurn returns the decision for the first turn, given two cards of the
// player and one card of the dealer.
func FirstTurn(card1, card2, dealerCard string) string {

	c1 := ParseCard(card1)
	c2 := ParseCard(card2)
	dc := ParseCard(dealerCard)

	switch {
	case c1+c2 == 21:
		if dc > 9 {
			return "S"
		}
		return "W"

	case c1 == 11 && c2 == 11:
		return "P"
	case c1 == 10 && c2 == 10:
		return "S"
	case c1+c2 <= 20 && c1+c2 >= 17:
		return "S"
	case c1+c2 >= 12 && c1+c2 <= 16:
		if dc >= 7 {
			return "H"
		} else {
			return "S"
		}
	case c1+c2 < 12:
		return "H"
	default:
		if dc == 11 {
			return "S"
		} else {
			return "W"
		}
	}
}

func RefectoredFirstTurn(card1, card2, dealerCard string) string {
	playerScore := ParseCard(card1) + ParseCard(card2)
	dealerScore := ParseCard(dealerCard)

	switch {
	// A pair of Aces is the only way to get exactly 22.
	case playerScore == 22:
		return "P"

	case playerScore == 21:
		if dealerScore >= 10 {
			return "S"
		}
		return "W"

	case playerScore >= 17 && playerScore <= 20:
		return "S"

	case playerScore >= 12 && playerScore <= 16:
		if dealerScore >= 7 {
			return "H"
		}
		return "S"

	// If the score didn't hit any of the rules above, it MUST be < 12.
	// We don't need a case for it, we just use default!
	default:
		return "H"
	}
}
