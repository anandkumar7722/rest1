import random

def get_computer_choice():
    """Randomly selects Rock (1), Paper (2), or Scissors (3)."""
    return random.randint(1, 3)

def determine_winner(player, computer):
    """Determines the winner based on game rules."""
    if player == computer:
        return "It's a tie!"
    elif (player == 1 and computer == 3) or \
         (player == 3 and computer == 2) or \
         (player == 2 and computer == 1):
        return "You win!"
    else:
        return "Computer wins!"

def play_game():
    """Main function to play the game."""
    print("🎮 Welcome to Rock (1), Paper (2), Scissors (3)! 🎮")

    while True:
        try:
            player_choice = int(input("Enter 1 for Rock, 2 for Paper, or 3 for Scissors (or 0 to quit): "))
            
            if player_choice == 0:
                print("👋 Thanks for playing! Goodbye.")
                break

            if player_choice not in [1, 2, 3]:
                print("❌ Invalid choice! Please enter 1, 2, or 3.")
                continue

            computer_choice = get_computer_choice()
            print(f"🖥️ Computer chose: {computer_choice}")

            result = determine_winner(player_choice, computer_choice)
            print(f"🏆 {result}")
            print("-" * 30)

        except ValueError:
            print("❌ Invalid input! Please enter a number (1, 2, 3, or 0 to quit).")

if __name__ == "__main__":
    play_game()
