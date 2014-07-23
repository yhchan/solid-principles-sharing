// https://docs.google.com/presentation/d/17Hg3-42fygPd_JUJHorjs1Ah2KCYnjBUBEQJGZgpT6E/edit#slide=id.g6514530ef28eb586614

int fprintf(
  FILE* stream, 
  HEAP* heap, 
  int* errno, 
  const char *format, ...);

int main(GLOBALS *globals) {
  int errno = 0;
  fprintf(
    globals->stdio->out, 
    globals->heap, 
    &errno, 
   "Hello world.\n");
  return 0;
}

int main() {
  printf("Hello world.\n");
  return 0;
}
