<div class="container">
  <h2 class="text-center">Protein Searches</h2>
    <hr class="separation-line blue-bg"/>

    <p style="font-size:14px; margin-top:20px;">
    The SRA houses DNA sequences, and so for protein:nucleotide searches we need to translate the SRA DNA sequences to compare them to the fasta file of protein sequences you upload. We use the ultrafast DIAMOND algorithm to compare translated DNA and proteins. We provide you with a compressed zip file containing the tab-separated diamond output for your downstream processing.

    <br>
    The command that we currently use for diamond is:

    diamond blastx -f 6 qseqid sseqid pident length mismatch qstart qend sstart send evalue bitscore sseq qseq -d DATA -q  SRAMG -o SRAID.m8

    <p style="font-size:14px; margin-top:20px;">
    SRAMG is one of our preprocessed metagenomes, and DATA is the fasta file that you upload.

    Register or login to get started searching.

    </p>
    </div>